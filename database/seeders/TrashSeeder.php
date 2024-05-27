<?php

namespace Database\Seeders;

use App\Models\Trash;
use Illuminate\Database\Seeder;

class TrashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ["name" => "Emberan", "code" => "Emb", "unit" => "Kg", "price" => 1190],
            ["name" => "Emberan Injek", "code" => "Inj", "unit" => "Kg", "price" => 1750],
            ["name" => "Emberan Naso", "code" => "Nas", "unit" => "Kg", "price" => 2800],
            ["name" => "Gelas A", "code" => "GB", "unit" => "Kg", "price" => 2800],
            ["name" => "Gelas B", "code" => "GK", "unit" => "Kg", "price" => 1400],
            ["name" => "Plastik Bening", "code" => "PB", "unit" => "Kg", "price" => 525],
            ["name" => "Kresek/Asoy", "code" => "Asy", "unit" => "Kg", "price" => 175],
            ["name" => "Pet A", "code" => "BB", "unit" => "Kg", "price" => 2590],
            ["name" => "Pet B", "code" => "BK", "unit" => "Kg", "price" => 1610],
            ["name" => "Pet Warna", "code" => "BW", "unit" => "Kg", "price" => 420],
            ["name" => "Tutup Botol", "code" => "TB", "unit" => "Kg", "price" => 2100],
            ["name" => "Tutup Galon", "code" => "TG", "unit" => "Kg", "price" => 3500],
            ["name" => "Mika Tipis/PVC", "code" => "MT/PVC", "unit" => "Kg", "price" => 0],
            ["name" => "Bimoli/Selofan", "code" => "Bim", "unit" => "Kg", "price" => 350],
            ["name" => "Yakult/Impek", "code" => "Ykl/Imp", "unit" => "Kg", "price" => 350],
            ["name" => "Kristal", "code" => "Krs", "unit" => "Kg", "price" => 2450],
            ["name" => "Ale-ale", "code" => "Ale", "unit" => "Kg", "price" => 1050],
            ["name" => "Paralon", "code" => "Prl", "unit" => "Kg", "price" => 910],
            ["name" => "Disk - CD", "code" => "CD", "unit" => "Kg", "price" => 4200],
            ["name" => "Galon Aqua", "code" => "GA", "unit" => "Kg", "price" => 4900],
            ["name" => "Duplex", "code" => "Dup", "unit" => "Kg", "price" => 420],
            ["name" => "Kardus", "code" => "Kar", "unit" => "Kg", "price" => 910],
            ["name" => "Kertas Semen", "code" => "Ksem", "unit" => "Kg", "price" => 1400],
            ["name" => "Koran A", "code" => "KorB", "unit" => "Kg", "price" => 910],
            ["name" => "Majalah", "code" => "Mjl", "unit" => "Kg", "price" => 700],
            ["name" => "Putihan", "code" => "KP", "unit" => "Kg", "price" => 1050],
            ["name" => "Putihan Warna", "code" => "KW", "unit" => "Kg", "price" => 910],
            ["name" => "Buku", "code" => "Buk", "unit" => "Kg", "price" => 840],
            ["name" => "Tetrapack", "code" => "Tpack", "unit" => "Kg", "price" => 0],
            ["name" => "Botol Beling", "code" => "Bbel", "unit" => "Kg", "price" => 280],
            ["name" => "Alumunium Pocari", "code" => "AlmPoc", "unit" => "Kg", "price" => 8400],
            ["name" => "Alumunium Panci", "code" => "AlmPnc", "unit" => "Kg", "price" => 9800],
            ["name" => "Besi A", "code" => "BsA", "unit" => "Kg", "price" => 2800],
            ["name" => "Besi Kabin", "code" => "BsCb", "unit" => "Kg", "price" => 2100],
            ["name" => "Besi B - Stal", "code" => "BsStal", "unit" => "Kg", "price" => 2100],
            ["name" => "Besi Karempong", "code" => "BKpg", "unit" => "Satuan", "price" => 1260],
            ["name" => "Kaleng", "code" => "Klg", "unit" => "Kg", "price" => 1540],
            ["name" => "Kuningan", "code" => "Kun", "unit" => "Satuan", "price" => 21000],
            ["name" => "Tembaga", "code" => "Tbg", "unit" => "Satuan", "price" => 52500],
            ["name" => "Kawat", "code" => "Kwt", "unit" => "Kg", "price" => 700],
            ["name" => "Kabel Isi", "code" => "KablIsi", "unit" => "Satuan", "price" => 1750],
            ["name" => "Accu", "code" => "Accu", "unit" => "Kg", "price" => 5600],
            ["name" => "Seng", "code" => "Sg", "unit" => "Kg", "price" => 1050],
            ["name" => "AC 2PK 1 set", "code" => "AC 2", "unit" => "Satuan", "price" => 280000],
            ["name" => "AC 3/4PK 1 set", "code" => "AC3/4", "unit" => "Satuan", "price" => 157500],
            ["name" => "AC 1/2PK 1 set", "code" => "AC1/2", "unit" => "Kg", "price" => 700],
            ["name" => "TV Tabung", "code" => "TVTbg", "unit" => "Satuan", "price" => 700],
            ["name" => "Mesin Cuci", "code" => "MC", "unit" => "Kg", "price" => 1400],
            ["name" => "Monitor LCD/Elektronik", "code" => "Elc", "unit" => "Kg", "price" => 1400],
            ["name" => "Setrika", "code" => "Strk", "unit" => "Kg", "price" => 1400],
            ["name" => "M. Air", "code" => "Mair", "unit" => "Kg", "price" => 1400],
            ["name" => "Rice Cooker", "code" => "RC", "unit" => "Kg", "price" => 1400],
            ["name" => "Dispenser", "code" => "Dpsr", "unit" => "Kg", "price" => 1400],
            ["name" => "DVD", "code" => "DVD", "unit" => "Kg", "price" => 1400],
            ["name" => "Kipas Angin", "code" => "Fan", "unit" => "Kg", "price" => 1400],
            ["name" => "Gabrukan", "code" => "Gbrk", "unit" => "Kg", "price" => 700],
            ["name" => "Minyak Jelantah", "code" => "Jlth", "unit" => "Kg", "price" => 5000],
        ];

        Trash::insert($items);
    }
}
