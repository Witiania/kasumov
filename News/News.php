<?php
declare(strict_types=1);
class News
{
    private string $title;
    private string $text;
    private User $author;
    private Category $category;
    private array $comments = [];

    public function __construct(string $title, string $text, User $author, Category $category)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
        $this->category = $category;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function addComment($comment): void
    {
        $this->comments[] = $comment;
    }

    public function getComments(): array
    {
        return $this->comments;
    }
}