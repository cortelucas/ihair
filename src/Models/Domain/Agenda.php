<?php


namespace App\Models\Domain;


class Agenda
{
    private string $data;
    private string $hora;

    /**
     * Agenda constructor.
     * @param string $data
     * @param string $hora
     */
    public function __construct(string $data, string $hora)
    {
        $this->data = $data;
        $this->hora = $hora;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getHora(): string
    {
        return $this->hora;
    }

    /**
     * @param string $hora
     */
    public function setHora(string $hora): void
    {
        $this->hora = $hora;
    }



}