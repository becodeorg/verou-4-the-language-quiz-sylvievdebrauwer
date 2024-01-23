<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    private string $word;
    private string $answer;

    public function __construct(string $word, string $answer)
    {
        $this->word = $word;
        $this->answer = $answer;
    }

    public function verify(string $answer): bool
    {
        return $userAnswer === $this->answer;
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
    public function getWord(): string
    {
        return $this->word;
    }
}