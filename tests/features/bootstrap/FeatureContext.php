<?php

use Behat\Behat\Context\Context;
use Behat\Mink\Exception\ElementNotFoundException;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * @AfterScenario @database
     */
    public function cleanDB()
    {
        shell_exec('bash ./.docker/scripts/rebuild-the-database.sh');
    }

    /**
     * @When I press the search button
     */
    public function iPressTheSearchButton()
    {
        $this->getSession()->getPage()->pressButton('btnK');
    }

    /**
     * @When I select the first autocomplete option for :prefix on the :field field
     *
     * Based on code by Lyle Mantooth.
     *
     * @see https://gist.github.com/IslandUsurper/12723643dddc9315ff71
     */
    public function iSelectFirstAutocomplete($prefix, $field)
    {
        $driver = $this->getSession()->getDriver();
        $page   = $this->getSession()->getPage();

        $element = $page->findField($field);
        if (! $element) {
            throw new ElementNotFoundException($driver, null, 'named', $field);
        }
        $page->fillField($field, $prefix);

        $this->getSession()->wait(1000, '"none" !== window.document.getElementsByClassName("UUbT9")[0].style.display');

        $xpath = $element->getXpath();
        // Down key.
        $driver->keyDown($xpath, 40);
        $driver->keyUp($xpath, 40);
    }

    /**
     * @Then I store the debug page as :file
     */
    public function iStoreTheDebugPage($file)
    {
        file_put_contents('storage/tests/'.$file, $this->getSession()->getPage()->getHtml());
    }

    /**
     * @Then I store the screenshot page as :file
     */
    public function iStoreTheScreenshotPage($file)
    {
        file_put_contents('storage/tests/'.$file, $this->getSession()->getScreenshot());
    }

    /**
     * @Given I wait for :second second
     */
    public function iWaitForSecond($second)
    {
        sleep($second);
    }

    /**
     * @Given I wait :seconds second(s)
     * @Given I wait :seconds for :condition
     */
    public function iWaitSecond($seconds, $condition = 'false')
    {
        $this->getSession()->getDriver()->wait(1000 * $seconds, $condition);
    }
}
