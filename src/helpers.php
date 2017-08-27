<?php

if (!function_exists('session_push')) {
    /**
     * Добавить сообщение для вывода пользователю
     *
     * @param string $key Тип сообщения (status-success|status-error|status-warning|status-info)
     * @param string $value Текст сообщения
     */
    function session_push($key, $value)
    {
        $values = \Session::get($key, []);

        $values[] = $value;

        \Session::flash($key, $values);
    }
}

if (!function_exists('flash_success')) {
    /**
     * Добавить успешное сообщение для вывода пользователю
     *
     * @param string $value Текст сообщения
     */
    function flash_success($value)
    {
        session_push('messages-success', $value);
    }
}

if (!function_exists('flash_error')) {
    /**
     * Добавить сообщение об ошибке для вывода пользователю
     *
     * @param string $value Текст сообщения
     */
    function flash_error($value)
    {
        session_push('messages-error', $value);
    }
}

if (!function_exists('flash_warning')) {
    /**
     * Добавить сообщение-предупреждение для вывода пользователю
     *
     * @param string $value Текст сообщения
     */
    function flash_warning($value)
    {
        session_push('messages-warning', $value);
    }
}

if (!function_exists('flash_info')) {
    /**
     * Добавить информационное сообщение для вывода пользователю
     *
     * @param string $value Текст сообщения
     */
    function flash_info($value)
    {
        session_push('messages-info', $value);
    }
}