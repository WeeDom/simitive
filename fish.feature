Feature: Fishing game
    In order to catch a fish
    As a player
    I need to start a game

    Rules:
    - Each game will have a randomly generated target score between 10 and 40
    - Each fish will have a score based on its strength
    - Each fishing line will have a score based on its strength
    - A fish can only be caught if the line strength exceeds that of the fish
    - line strength will remain constant during a game
    - player will have 3 lives

    Scenario: Load the game
    Given the user interface loads successfully
    When the player loads the url
    Then the player will have 3 lives
    And the page should show the total number of available fish of each species
    And the database will contain a new record for the current game
    And the database will have a randomly generated target score
    And the target score will be not less than 10
    And thee target score will be not more than 40

    Scenario: Catch a fish
    Given the player clicks a button labelled "go Fish"
    When the button is clicked
    Then a request will be sent to the server to catch a random fish
    And the server will return a json string describing which fish was caught
    And the json string will state the result of the operation
    And the json string will match the template supplied

    Scenario: Successful Catch
    Given the api has reported back a successful catch
    Then the result should be displayed to the user
    And the result will read "Success"
    And the database will contain the updated score for this game

    Scenario: Unsuccessful catch
    Given the fish caught was not a shark
    Then the record for this game will be updated to show a lost life
    And the result will be returned as a json string
    And the json string will match the template supplied
    And the result will be displayed to the user

    Scenario: Catch a shark
    Given the fish caught was a shark
    Then the record for this game will be updated to show all remaining lives have been removed
    And the result will be returned as a json string
