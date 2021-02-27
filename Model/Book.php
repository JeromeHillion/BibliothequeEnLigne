<?php

class Book
{

    private string $name;
    private string $mode;
    private string $author;
    private string $date;
    private float $price;


    public function __construct(string $name, string $mode, string $author, string $date, float $price)
    {
        $this->name = $name;
        $this->mode = $mode;
        $this->author = $author;
        $this->date = $date;
        $this->price = $price;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

}
?>
