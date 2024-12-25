<?php

namespace Andrew\MultiException;

/**
 * Этот класс позволяет собирать все ошибки в один массив.
 * Реализован в связи с тем, что PHP при наличии нескольких ошибок
 * выбрасывает только одну из.
 */

class Errors
{
    protected $errors = [];

    /**
     * Возвращает все ошибки
     *
     * @return array|mixed
     */
    public function all()
    {
        return $this->errors;
    }

    /**
     * Добавляет в массив ошибку
     *
     * @param \Exception $error
     * @return void
     */
    public function add(\Exception $error) : void
    {
        $this->errors[] = $error;
    }

    /**
     * Проверяет массив на наличие ошибок
     *
     * @return bool
     */
    public function empty() : bool
    {
        return empty($this->errors);
    }
}