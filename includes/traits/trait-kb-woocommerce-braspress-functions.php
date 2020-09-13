<?php

trait KB_WooCommerce_Braspress_Functions {

    /**
     * @param $text
     * @return string|string[]|null
     */
    public function remove_chars($text = ''): string
    {
        return preg_replace('([^0-9])', '', $text);
    }

    /**
     * @param float $value
     * @return float
     */
    public function normalize_money(float $value): float
    {
        $value = str_replace( '.', '', $value );
        $value = str_replace( ',', '.', $value );

        return $value;
    }

    /**
     * @param $value
     * @return string|string[]
     */
    public function fix_format($value)
    {
        $value = str_replace(',', '.', $value);
        return $value;
    }
}