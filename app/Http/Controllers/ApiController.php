<?php


namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\HoaDon;
use App\Models\LichChieu;
use App\Models\Phim;
use App\Models\Ve;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getGheExit(Request $request)
    {

        $a = Ghe::query()
            ->with('ves.lichchieu')
            ->whereHas('ves.lichchieu')
            ->whereHas('ves', function ($query) use ($request) {
                $query->where('ngayXem', $request->ngayXem);
            })
            ->whereRelation('ves.lichchieu', 'maLichChieu', $request->maLichChieu)
            ->whereRelation('ves.lichchieu', 'maPhong', $request->maPhong)
            ->whereRelation('ves.lichchieu.phims', 'maPhim', $request->maPhim)
            ->get();
        return $a;
    }

    public function getPhimClient(Request $request)
    {

        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $query = Phim::query()->with('lichChieus')

        ->whereRelation('lichChieus', function ($q) use ($request) {

            $q
                ->whereDate('ngayChieu', '<=', $request->ngayChieu)
                ->whereDate('ngayKetThuc', '>=', $request->ngayChieu);


        });



        return  $query->get();
    }

    public function getTicket(Request $request)
    {

        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $query = HoaDon::query()->with('ves.lichchieu.phims')->where('maKhachHang', $request->id);



        return $query->get();
    }


}
