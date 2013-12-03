<?php
/**
* PHPExcel
*
* Copyright (C) 2006 - 2013 PHPExcel
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU Lesser General Public
* License as published by the Free Software Foundation; either
* version 2.1 of the License, or (at your option) any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
* Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with this library; if not, write to the Free Software
* Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA
*
* @category PHPExcel
* @package PHPExcel
* @copyright Copyright (c) 2006 - 2013 PHPExcel (http://www.codeplex.com/PHPExcel)
* @license http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt        LGPL
* @version 1.7.9, 2013-06-02
*/

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once '../Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Eva")
                                                         ->setLastModifiedBy("Eva")
                                                         ->setTitle("PHPExcel Test Document")
                                                         ->setSubject("PHPExcel Test Document")
                                                         ->setDescription("Test document for PHPExcel, generated using PHP classes.")
                                                         ->setKeywords("office PHPExcel php")
                                                         ->setCategory("Test result file");


// Add some data

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'NIM')
            ->setCellValue('C1', 'Nama')
            ->setCellValue('D1', 'Alamat')
                        ->setCellValue('E1', 'Prodi');

mysql_connect('localhost','root','');
mysql_select_db('latihan');

$sql = mysql_query("select * from mahasiswa, prodi, relasi WHERE mahasiswa.nim = relasi.nim AND relasi.kode_prodi = prodi.kode_prodi");
$no = 1;
while($row = @mysql_fetch_array($sql)){
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.($no+1), $no)
                ->setCellValue('B'.($no+1), $row['nim'])
                ->setCellValue('C'.($no+1), $row['nama'])
                ->setCellValue('D'.($no+1), $row['alamat'])
                                ->setCellValue('E'.($no+1), $row['nama_prodi']);
    $no += 1;
}
$objPHPExcel->getActiveSheet()->getRowDimension(8)->setRowHeight(-1);
$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);


// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Save Excel 95 file
echo date('H:i:s') , " Write to Excel5 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing files" , EOL;
echo 'Files have been created in ' , getcwd() , EOL;