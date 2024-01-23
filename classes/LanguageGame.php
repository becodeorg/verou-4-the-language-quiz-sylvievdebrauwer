<?php

class LanguageGame
{
    private array $words;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        $this->words = [];
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
            // TODO: create instances of the Word class to be added to the words array
        }
    }

    public function run(): void
    {
        session_start();
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        if (!empty($_POST) || isset($_POST[translationBar])) {
            $this ->verifyAnswer();
        } 
    }
        // TODO: select a random word for the user to translate

    private function selectRandomWord(): void
    {
        $randomWord = $this -> getRandomWord();
        $_SESSION['currentWord'] = $randomWord->getWord();
    }

    private function getRandomWord(): Word
    {
        return $this->words[array_rand($this->words)];
    }

    private function verifyAnswer(): void
    {
        // Get the user's answer from the form
        $userAnswer = $_POST['translationBar'];

        // Get the correct answer for the current word
        $currentWord = $_SESSION['currentWord'];
        $correctAnswer = $this->getCorrectAnswer($currentWord);

        // Verify the answer
        $isCorrect = $correctAnswer->verify($userAnswer);

        // Generate a message for the user
        $_SESSION['message'] = $isCorrect ? 'Correct! Well done!' : 'Incorrect. Try again!';
    }

    private function getCorrectAnswer(string $word): Word
    {
        // Find and return the correct Word instance for the given word
        foreach ($this->words as $wordObj) {
            if ($wordObj->getWord() === $word) {
                return $wordObj;
            }
        }

        // Return a new Word instance with empty values if not found (error handling)
        return new Word('', '');
    }
}

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown