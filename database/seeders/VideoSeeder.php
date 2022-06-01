<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            "https://www.youtube.com/embed/cHDTfgkIsRo",
            "https://www.youtube.com/embed/Y72_Nw4YSIQ",
            "https://www.youtube.com/embed/VDe39DwBuTE",
            "https://www.youtube.com/embed/IvYI9nvr0oc",
        ];
        $title = [
            "90 TỪ VỰNG TIẾNG ANH GIAO TIẾP THÔNG DỤNG NHẤT THEO CHỦ ĐỀ - Học tiếng Anh Online",
            "Học tiếng Anh giao tiếp cơ bản | Từ vựng theo chủ đề: thói quen hàng ngày",
            "Langmaster - Từ vựng tiếng Anh về các HOẠT ĐỘNG THƯỜNG NGÀY [Học tiếng Anh cho người mới bắt đầu",
            "3 bước tự học từ vựng hiệu quả",
        ];
        for ($i = 0; $i < count($links); $i++) {
            \DB::table('videos')->insert([
                'id' => $i + 1,
                'links' => $links[$i],
                'title' => $title[$i],
            ]);
        }
    }
}
