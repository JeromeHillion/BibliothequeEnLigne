<?php

class Book
{

    private string $name;
    /*private string $mode; clé étrangère*/
    private int $author_id; //clé étrangère
    private string $date;
/*    private float $price; dans la table exemplaire*/


    public function __construct(string $name, int $author_id, string $date)
    {
        $this->name = $name;
        $this->author_id = $author_id;
        $this->date = $date;


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
    public function getAuthor_id(): int
    {
        return $this->author_id;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

}
?>
