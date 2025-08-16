<?php
namespace LibrarySystem;

use LibrarySystem\Traits\TimestampTrait;
use LibrarySystem\Traits\ActivityLogTrait;

class Book {
    use TimestampTrait, ActivityLogTrait;

    private static int $counter = 1;
    protected int $id;
    protected string $title;
    protected string $author;
    protected bool $available = true;

    public function __construct(string $title, string $author) {
        $this->initTimestamp();
        $this->id = self::$counter++;
        $this->title = $title;
        $this->author = $author;
        $this->logAction("Book created: {$title} by {$author}");
    }

    public function getId(): int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function getAuthor(): string { return $this->author; }
    public function isAvailable(): bool { return $this->available; }

    public function borrow(): void {
        $this->available = false;
        $this->logAction("Book borrowed");
    }

    public function returnBook(): void {
        $this->available = true;
        $this->logAction("Book returned");
    }

    public function isLate(): bool {
        // مثال: لا يوجد تأخير حاليًا
        return false;
    }
    
}
