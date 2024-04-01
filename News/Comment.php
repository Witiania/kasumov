<?php
declare(strict_types=1);
class Comment
{
    private string $text;
    private Commenter $commenter;

    public function __construct(string $text,Commenter $commenter)
    {
        $this->text = $text;
        $this->commenter = $commenter;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getCommenter(): Commenter
    {
        return $this->commenter;
    }
}