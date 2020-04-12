<?php

namespace App;


class CsvRelation
{

    /**
     * CSVファイルを2次元配列にするメソッド
     * @param String $filePath ファイルパス
     * @return array 2次元CSVの内容
     */
    public static function csvToArray(String $filePath): array {
        // ファイルの読み込み
        $fp = fopen($filePath, 'r');
        // 配列の初期化
        $array = array();

        $row = 0;
        while( $csv = fgetcsv( $fp ) ){
            for($col = 0; $col < count( $csv ); $col++ ){
                $array[$col][$row] = $csv[$col];
            }
            $row++;
        }
        fclose( $fp );
        return $array;
    }

    /**
     * 2次元配列の内容をCSVに出力するメソッド
     * @param array $csvArray CSVにする2次元配列
     * @param String $filePath ファイルパス
     * @return bool
     */
    public static function arrayToCsv(array $csvArray,String $filePath): bool {
        // 書き込むファイルの読み込み
        $fp = fopen($filePath, 'w');
        foreach ($csvArray as $array){
            if (is_array($array)) {
                return false;
            }
            fputcsv($fp, $array);
        }
        fclose($fp);
        return true;
    }

}
