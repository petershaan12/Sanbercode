
<?php 
function perolehan_medali($items)
    {
        foreach ($items as $key => $data) {
            $kata = explode(" ",$data[1]);
            $hasil = count ($kata);
            $gatau = array_count_values($kata);

            $kump = array (
            'Negara'  => $data[0],
            'Emas' => $gatau,
            );
            
            print_r($kump);
            echo "<br>";
                }
                
        if ($items == NULL) {
            echo "No data";
        }
        return $array;
    }  
    // perolehan_medali(
    //     array(
    //         array('Indonesia', 'Emas'),
    //         array('Filipina', 'Perak'),
    //         array('Indonesia', 'Emas')
    //     )
    //     );
            //saya menyerah untuk teks yg sama:(

    perolehan_medali([]);

?>  