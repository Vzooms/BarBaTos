<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory(100)->create();

			DB::table('products')->insert([
                "name"=> "Amazfit T-Rex Pro Smartwatch GPS 10 ATM jam tangan 100+ Sports Modes - Meteorite Black",
                "category_id"=> 2,
                "description"=> "Diameter : 47.7x47.7x13.5mm\r\nBerat : 59,4g (dengan tali)\r\nLebar tali : 22 mm\r\nWater Rasistant : 10 ATM\r\nLayar : 1,3 \"\"AMOLED HD\r\nResolusi : 360x360\r\nLayar sentuh : Kaca tempered + lapisan anti sidik jari\r\nBaterai : 390 mAh\r\nAplikasi : Aplikasi Zepp",
                "price"=> 2199000,
                "photo"=> "e9c2c8b9-6cfc-4b85-8d77-ad4672a426a4.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Eggel Valor Amoled SmartWatch",
                "category_id"=> 2,
                "description"=> "❖ GARANSI: 1 Tahun\r\nSatisfaction Guarantee: Tidak puas, Kembalikan barang dalam 7 hari, dan dapatkan uang Anda kembali\r\n❖ Technical Specifications:\r\nBluetooth Version: 5.0\r\nDisplay: 1.3” AMOLED Screen\r\nResolution: 360 * 360 dpi\r\nWaterproof Level: IP68\r\nCase Material: Zinc Alloy\r\nStap Material: Rubber\r\nCase Diameter: 43mm\r\nWorking Time: 5-10 days\r\nAlways on Display: 24-36 hours\r\nOperating Temperature: -10 - 45 C",
                "price"=> 499000,
                "photo"=> "27e17c28-7912-44e6-bd24-6e43b2a020ae.png",
                ]);

                DB::table('products')->insert([
                "name"=> "HUAWEI WATCH GT 2 46mm SmartWatch",
                "category_id"=> 2,
                "description"=> "1. Solusi Daya Revolusioner\r\nSeri HUAWEI WATCH GT selalu menjelajahi batas usia baterai jam tangan pintar. Dengan chip HUAWEI yang dikembangkan sendiri, Kirin A1, desain dual-chip dan teknologi hemat daya yang cerdas, akan melayani Anda siang dan malam hingga 2 minggu.\r\n\r\n2. Pelatih Olahraga Profesional\r\nTerobosan baru dalam pelatihan pribadi. HUAWEI WATCH GT 2 melacak latihan Anda dengan sistem penentuan posisi yang tepat dan memonitor detak jantung Anda dengan TruSeen™ 3.5 yang akurat. Ini adalah pendamping profesional untuk kegiatan indoor dan outdoor Anda.\r\n\r\n3. Pemantauan Detak Jantung Real-time\r\nHUAWEI TruSeen ™ sekarang ditingkatkan ke versi 3.5 untuk memberikan pengukuran pribadi detak jantung Anda secara lebih efisien dan akurat. Ditambah dengan algoritma denyut jantung AI yang cerdas, ia memonitor detak jantung Anda sepanjang hari, bahkan saat Anda tidur.\r\n\r\n4. Pemantauan Detak Jantung Saat Renang\r\nBerkat fitur tahan air 5ATM, HUAWEI WATCH GT 2 dapat memantau detak jantung Anda saat Anda berenang serta SWOLF, jarak, kalori yang terbakar, dan kecepatan Anda.\r\n\r\n5. Asisten Kehidupan Anda Sehari-Hari\r\nUntuk membuat kehidupan sehari-hari Anda lebih mudah, HUAWEI WATCH GT 2 mendukung fitur-fitur seperti Bluetooth Calling, Music dalam perangkat, Notifikasi Pesan, pelacakan tidur TruSleepTM 2.0 dan pemantauan tekanan TruRelaxTM.",
                "price"=> 1799000,
                "photo"=> "250c82b0-84ac-4b82-aff5-330336b52796.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Asus vivobook A416JAO FHD322 i3 1005G1",
                "category_id"=> 1,
                "description"=> "Highlights :\r\n- MENGGUNAKAN PROCESOR INTEL GENERASI 10\r\n- SUDAH INCLUDE OFFICE HOME STUDENT 2019\r\n- MENGGUNAKAN STORAGE TIPE SSD\r\n\r\nGARANSI ASUS INDONESIA 2 TAHUN\r\n\r\nBarang 100% Baru dan Original",
                "price"=> 5459000,
                "photo"=> "3c16ceb9-dbe6-400f-b3d5-07212984a343.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Asus vivobook A416JAO FHD322 i3 1005G1 4GB 256ssd W10+OHS 14FHD",
                "category_id"=> 1,
                "description"=> "Card Reader 4-in-1 Card Reader\r\nAudio Chip High Definition (HD) Audio\r\nSpeakers Stereo speakers, 1.5W x2, Dolby Audio\r\nCamera 0.3MP with Privacy Shutter\r\nMicrophone 2x, Array\r\nBattery Integrated 35Wh\r\nSecurity Chip Firmware TPM 2.0\r\nFingerprint Reader None\r\nOther Security Camera privacy shutter\r\nMANAGEABILITY None\r\nBase Warranty 1-year, Depot\r\nIncluded Upgrade 2Y Depot/CCI -IPENTRY (ESS) (5WS0X58198)\r\nACCESSORIES None\r\nCERTIFICATIONS\r\nGreen Certifications \"ENERGY STAR 8.0\r\nErP Lot 3\r\nRoHS compliant",
                "price"=> 4099000,
                "photo"=> "5bfb1374-dad2-4e7c-b819-018a7424d141.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Fantech SONATA MH90 Headset Gaming Mobile Multiplatform FREE SPLITTER",
                "category_id"=> 3,
                "description"=> "SAATNYA MENJADI SANG MAESTRO DENGAN SONATA MH90\r\n\r\n[ FREE HEADSET STAND AC3001 & POUCH ]\r\n\r\nSering diremehkan dan dianggap tidak berguna ketika kamu sedang menggeluti bidang yang kamu cintai?\r\nSudah saatnya menunjukkan bahwa bidang yang kamu cintai juga bisa bermanfaat dan menghasilkan!\r\nHari pembuktian telah tiba! #TheMaestro\r\n\r\n\r\nSOFT MEMORY FOAM\r\nEarcup Sonata MH90 terbungkus dengan sempurna dengan MEMORY FOAM premium yang super empuk agar selalu fokus dalam mode kompetitif\r\n\r\nMulti-Platform Compatibility\r\nDengan Single 3.5mm TRRS Jack GOLD PLATED kamu bebas gunakan di perangkat mana saja!\r\n\r\nBIGGER & MORE PRECISE\r\nDriver unit Sonata MH90 berukuran 53mm yang lebih besar dari headset gaming pada umumnya menghasilkan performa suara yang lebih luas dan presisi untuk Gaming maupun keperluan Professional Audio.\r\n\r\nIn-Line Audio Control\r\nSonata MH90 dilengkapi dengan Audio Control minimalis di kabel headset yang memudahkan kalian mengatur volume dan mute microphone dengan satu gerakan\r\n\r\nDurable Build\r\nFrame dari Sonata MH90 ini terbuat dari Bahan Aluminium yang di desain khusus untuk bisa bertahan lama bagi Gamers Harian yang pemakaian berjam jam\r\n\r\nLIGHTWEIGHT COMFORT\r\nMeski terbuat dari bahan aluminium yang kokoh tidak membuat headset ini berat. Total berat hanya 266gr akan membuat kalian tidak terbebani saat pemakaian durasi lama seharian\r\n\r\nDetachable Microphone & Noise Cancelling\r\nMicrophone yang fleksible dan bisa dilepas pasang\r\n\r\nSpesifikasi :\r\n- Driver Unit : 53mm\r\n- Speaker Sensitivity : 110±3dB\r\n- Speaker Frequency Response : 20-20kHz\r\n- Speaker Impedance : 64Ω±15%\r\n- Microphone Sensitivity : -42±3dB\r\n- Microphone directivity : Omni Directional\r\n- Micrphone Impecande : 2.2kΩ\r\n- Microphone Dimension : 6*2.7mm\r\n- Plug Type : 3.5mm TRRS Jack GOLD PLATED\r\n- Panjang Kabel : 2Meter\r\n- Berat Headset : 266gr\r\n\r\nIsi di dalam Kemasan :\r\n1pcs SONATA MH90 Headset\r\n1pcs Mic External\r\n1pcs Audio Splitter\r\n1pcs User Manual\r\n1pcs POUCH (Sarung Headset)\r\n\r\nGaransi Resmi Fantech Care 1 Tahun",
                "price"=> 539000,
                "photo"=> "d3e298af-0fae-40ef-9900-4e6d4cab3480.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Logitech G733 LIGHTSPEED Wireless 7.1 Surround Gaming Headset",
                "category_id"=> 3,
                "description"=> "Garansi Hardware Terbatas 2 Tahun\r\n\r\nMAINKAN SESUAI KEINGINANMU\r\n\r\nKEBEBASAN WIRELESS\r\nTeknologi wireless LIGHTSPEED memberikan daya tahan baterai selama 29+ jam dan kebebasan wireless yang andal hingga maksimal 20 meter. Daya tahan baterai berdasarkan volume headset yang ditetapkan ke 50% dan pencahayaan dimatikan Relaks dan buai dirimu dalam game, musik, film, atau apa pun hobimu. Bebas dan mainkan sesuai keinginanmu.\r\n\r\nLIGHT ‘EM UP\r\nSekitar 16,8 juta warna, dua zona untuk mengkustomisasi pencahayaan agar mencerminkan jati dirimu. Personalisasi warna, visualisasi audio-mu, integrasi ke dunia gaming-mu, atau bereksperimen sesuka hati dengan animasi preset dan buatan sendiri.\r\n\r\nAUDIO YANG MEMUKAU\r\nDengar semuanya dengan PRO-G driver kami yang didesain untuk audio yang akurat dan full-range. Lebih asyik bermain game dengan generasi DTS Headphone:X 2.0 surround sound terbaru.3Fitur terbaik seperti DTS Headphone:X 2.0, Blue VO!CE, dan LIGHTSYNC RGB tidak tersedia di PlayStation 4. Terdengar menakjubkan dan sangat jelas dengan mikrofon Discord Certified.\r\n\r\nPERSYARATAN\r\nPort USB 2.0 (tipe port A)\r\nPC dengan Windows® 7 atau versi terbaru, macOS X 10.12 atau versi terbaru, atau konsol gaming PlayStation® 48Fitur terbaik seperti DTS Headphone:X 2.0, Blue VO!CE, dan LIGHTSYNC RGB tidak tersedia di PlayStation 4.\r\n(Opsional) Akses internet untuk Software Logitech G HUB\r\n\r\nSPESIFIKASI FISIK\r\nPanjang: 194 mm\r\nLebar: 190 mm\r\nKedalaman: 83 mm\r\nBerat: 278 g\r\n\r\nSPESIFIKASI TEKNIS\r\nHeadphone:\r\nDriver: PRO-G 40 mm\r\nJangkauan Wireless\r\nJenis Koneksi: LIGHTSPEED wireless via USB\r\nDaya Tahan Baterai (dapat diisi ulang)\r\nTanpa pencahayaan: 29 jam\r\nPencahayaan default: 20 jam\r\n\r\nISI KEMASAN\r\nG733 LIGHTSPEED Wireless RGB Gaming Headset\r\nHeadband lembut yang dapat dibalikkan (terlampir)\r\nMikrofon lepas pasang\r\nLIGHTSPEED wireless receiver (USB-A)\r\nKabel pengisian daya USB-C ke USB-A\r\n\r\nNOMOR SUKU CADANG\r\nBlack : 981-000867\r\nWhite : 981-000886\r\nLilac: 981-000893",
                "price"=> 1699000,
                "photo"=> "397e8f72-29a0-47a7-88a6-5e4da243562f.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Rexus Headset Gaming Wireless Daxa TS1",
                "category_id"=> 3,
                "description"=> "- 3 Pilihan Equalizer, yaitu Hi-Fi, Bass, dan 3D.\r\n- Rounded RGB LED 8 mode warna yang bisa dihidup-matikan.\r\n- Desain elegan dan ergonomis\r\n- Earcup bertipe over-ear yang nyaman dan efektif mereduksi suara dari luar. Dan juga dilengkapi dengan busa memori yang berlapis kain Fabric berpori.\r\n- Mikrofon dengan busa pelindung yang dapat dicopot-pasang.\r\n- Baterai tanam Lithium berkapasitas besar.\r\n\r\nFitur Unggulan\r\n\r\nSuara Detil dan Imbang\r\nHeadset DAXA TS1 didukung oleh driver berkualitas dengan diameter 40mm dan dilengkapi dengan chipset SSS untuk memproduksi suara yang jernih dan berimbang. Suara bass terdengar empuk dan dalam, sedangkan suara tinggi terasa detil tanpa terasa memekakkan telinga. Cocok bagi Anda penyuka musik bergenre EDM ataupun Audiophile. Cocok pula untuk bermain game, menonton video, ataupun aktivitas lainnya.\r\n\r\nTeknologi Nirkabel Minim Latensi\r\nHeadset DAXA TS1 menggunakan teknologi nirkabel Radio Frequency (RF) untuk memperoleh kecepatan transfer suara dengan latensi kurang dari 40ms sehingga bisa digolongkan tanpa latensi. Teknologi RF terbukti masih unggul soal latensi, kapasitas, dan kecepatan transfer data, dibandingkan teknologi wireless lainnya, seperti Bluetooth.\r\n\r\nSpesifikasi Teknis\r\nTipe Koneksi: Wireless 2.4G + Wired\r\nRentang frekuensi: 20 – 25.000Hz\r\nDiameter Driver: 40mm\r\nImpedansi Speaker: 32±15%Ω\r\nTipe Mikrofon: Dapat dilepas (Detachable), dengan busa pelindung\r\nDiameter Mikrofon: 2,7mm (6 titik, Omni-directional)\r\nSensititas Mikrofon: 40±3dB\r\nKapasitas Baterai:1100Mah\r\nDurasi Operasional: 18 jam (tanpa RGB), 12 jam (dengan RGB)\r\nWaktu Isi Ulang Baterai: sekitar 2,5 jam\r\nTipe Konektor Pengisi Daya: USB TypeC\r\nTegangan Pengisian Daya: 5V/1A\r\nBerat Headset: 348 grams\r\nDimensi Headset: 187,5 x 93 x 207mm",
                "price"=> 779000,
                "photo"=> "28d689d7-d2e7-43f2-bcd3-7e8a03aaad9e.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Laptop HP 245 G8 - Ryzen 5-5500U SSD 512GB",
                "category_id"=> 1,
                "description"=> "HP 245 G8 Notebook PC\r\n\r\n• Prosesor : AMD Ryzen™ 5 5500U (up to 4.0 GHz max boost clock, 8 MB L3 cache, 6 cores, 12 threads)\r\n• Operating System : Windows 11 Home Single Language\r\n• RAM : 8 GB / 16 GB DDR4-3200 MHz\r\n• Storage : 512 GB PCIe® NVMe™ SSD\r\n• Display : 14\" diagonal, HD (1366 x 768), narrow bezel, anti-glare, 250 nits, 45% NTSC\r\n• Graphics : AMD Radeon™ Graphics\r\n\r\n• Ports :\r\n2 Super Speed USB Type-A 5Gbps signaling rate;\r\n1 SuperSpeed USB Type-C® 5Gbps signaling rate;\r\n1 RJ-45;\r\n1 headphone/microphone combo;\r\n1 HDMI 1.4b;\r\n1 AC power\r\n\r\n• Expansion Slots Note : Supports SD, SDHC, SDXC.\r\n• Audio Features : Stereo speakers, integrated digital microphone\r\n• Camera : 720p HD camera\r\n• Keyboard : Full-size island-style, spill and pick resistant keyboard\r\n• Wireless : Realtek 802.11a/b/g/n/ac (2x2) Wi-Fi® and Bluetooth® 5 combo\r\n• Battery : HP Long Life 3-cell, 41 Wh Li-ion\r\n• Dimensions Without Stand (W X D X H) : 32.4 x 22.59 x 1.99 cm\r\n• Weight : 1.47 kg\r\n• Security Management : TPM 2.0; Hardware TPM\r\n\r\n• Software Included :\r\nHP Support Assistant;\r\nNative Miracast support;\r\nHP Audio Switch;\r\nHP Documentation;\r\nHP Setup Integrated OOBE;\r\nHP SSRM;\r\nHP JumpStarts;\r\n\r\nGaransi Resmi HP Indonesia 1 Tahun",
                "price"=> 8033000,
                "photo"=> "5fce7438-0ece-4bb2-8984-d610d33ed910.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10",
                "category_id"=> 1,
                "description"=> "Keterangan Variant\r\n📌Non Bundle = Tidak dapat bonus yang seperti digambar 256GB SSD\r\n📌Bundle Headset = Dapat Bonus Mouse Logitech H111\r\n📌Bundle Mouse = Dapat Bonus Mouse Logitech M170\r\n📌Bundle Lengkap = Dapat Bonus Mouse & Headset\r\n\r\n👍BELI LAPTOP 1 ATAU LEBIH HARGA DISTRIBUTOR👍\r\n📌GRATIS ONGKIR DAN ASURANSI PENGIRIMAN\r\n👍FAST RESPON WA *0896-8171-3262\r\n📌Terima reseller dan pembelian dalam jumlah besar\r\n👍BISA REQUEST FAKTUR PAJAK\r\n\r\nSPESIFIKASI\r\n\r\nProcessor: Intel® Core™ i3-1115G4 (3,0 GHz, 2 Core, 4 Thread, 6MB Cache)\r\nMemory: DDR4 8 GB 3200MHz\r\nStorage: 256GB M.2 SSD\r\nGraphic: Intel® UHD Graphics\r\nDisplay: 15.6” FHD Resolusi: 1920 x 1080 PPI: 141 Kontrol Kecerahan: Peredupan DC Kecerahan: 220 nit (umum) Rasio kontras: 500:1 Gamut warna: NTSC 45% (umum) Sudut tampilan: 90°(H)\r\nOperating System: Windows 10 Home\r\nSpeaker (Output Suara): Speaker stereo 2 W + 2 W Audio DTS\r\nCamera : 720p HD\r\nKonektivitas : Bluetooth 5.0 & Wi-Fi 5 2.4Ghz/5GHz\r\nBaterai : Kapasitas Terukur: 46Wh\r\nports:\r\nHDMI 1.4 x 1\r\nUSB 3.2 Gen1 x 2, USB 2.0 x 1\r\nKunci Kensington: Ya\r\nEthernet (Lan): RJ45\r\nOutput Audio Digital Optik: Ya\r\nJack headphone 3.5 mm x 1\r\nSlot SD: SD 3.0\r\n\r\nBerat produk: 1.8kg",
                "price"=> 4859000,
                "photo"=> "1269bf67-69f2-4b71-ac8b-2988af56f544.jpg",
                ]);

                DB::table('products')->insert([
                "name"=> "Lenovo IdeaPad Slim 3 Celeron N4020 256GB SSD 4GB Win10+OHS",
                "category_id"=> 1,
                "description"=> "IdeaPad 3 14IGL05\r\n81WH00A2ID - Abyss Blue\r\n81WH00A3ID - Platinum Grey\r\n81WH00A4ID - Business Black\r\nWH0049ID - FHD - Black\r\n-81WH0047ID - FHD - PLATINUMGREY\r\n\r\nProcessor Intel Celeron N4020 (2C / 2T, 1.1 / 2.8GHz, 4MB)\r\nGraphics Integrated Intel UHD Graphics 600\r\nChipset Intel SoC Platform\r\nMemory 4GB Soldered DDR4-2400\r\nMemory Slots Memory soldered to systemboard, no slots\r\nMax Memory 4GB soldered memory, not upgradable\r\nStorage 256GB SSD M.2 2242 PCIe 3.0x2 NVMe\r\nStorage Support \"Up to 2 drives, 1x 2.5\"\" HDD + 1x M.2 2242/2280 SSD\r\n• 2.5\"\" HDD up to 1TB\r\n• M.2 2242 SSD up to 512GB\r\n• M.2 2280 SSD up to 512GB\"\r\nCard Reader 4-in-1 Card Reader\r\nOptical None\r\nAudio Chip High Definition (HD) Audio\r\nSpeakers Stereo speakers, 1.5W x2, Dolby Audio\r\nCamera 0.3MP with Privacy Shutter\r\nMicrophone 2x, Array\r\nBattery Integrated 35Wh\r\nMax Battery Life MobileMark 2014: 14 hr\r\nPower Adapter 45W Round Tip Wall-mount\r\nDESIGN\r\nDisplay 14\" HD TN 220nits Anti-glare\r\nTouchscreen None\r\nKeyboard Non-backlit, English\r\nCase Color Business Black/Platinum Grey/Cherry Red/Abbys Blue\r\nSurface Treatment Texture\r\nCase Material PC + ABS (Top), PC + ABS (Bottom)\r\nDimensions (WxDxH) 327.1 x 241 x 19.9 mm (12.88 x 9.49 x 0.78 inches)\r\nWeight 1.5 kg (3.3 lbs)\r\nSOFTWARE\r\nOperating System Windows 10 Home 64, English\r\nBundled Software Office Home and Student 2019\r\nCONNECTIVITY\r\nEthernet None\r\nWLAN + Bluetooth 11ac, 2x2 + BT5.0\r\nStandard Ports \"1x power connector\r\n1x card reader\r\n1x HDMI 1.4b\r\n1x headphone / microphone combo jack (3.5mm)\r\n1x USB 2.0\r\n2x USB 3.2 Gen 1\"\r\nSECURITY & PRIVACY\r\nSecurity Chip Firmware TPM 2.0\r\nFingerprint Reader None\r\nOther Security Camera privacy shutter\r\nMANAGEABILITY None\r\nSERVICE\r\nBase Warranty 1-year, Depot\r\nIncluded Upgrade 2Y Depot/CCI -IPENTRY (ESS) (5WS0X58198)\r\nACCESSORIES None\r\nCERTIFICATIONS\r\nGreen Certifications \"ENERGY STAR 8.0\r\nErP Lot 3\r\nRoHS compliant\"",
                "price"=> 4099000,
                "photo"=> "5bfb1374-dad2-4e7c-b819-018a7424d141.jpg",
                ]);
    }
}
