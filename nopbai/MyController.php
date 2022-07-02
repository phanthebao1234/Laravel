<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{

    public function homnay()
    {
        return "<h1>Hôm nay là " . date('d/m/Y') . "</h1>";
    }

    public function index()
    {
        $sdt = '0357432472';
        return view('contact', ['sdt' => $sdt]);
    }
    public function giaipt(Request $pt)
    {
        $a = $pt->input('a');
        $b = $pt->input('b');
        $c = $pt->input('c');
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    $result = 'Phương trình vô số nghiệm';
                } else {
                    $result = 'Phương trình vô nghiệm';
                }
            } else {
                $tinh = -$c / $b;
                $result = "x=-b/c=" . $tinh;
            }
        } else {
            $delta = $b * $b - 4 * $a * $c;
            if ($delta < 0) {
                $result = "Phương trình vô nghiệm";
            } else if ($delta == 0) {
                $tinh = -$b / (2 * $a);
                $result = "Phương trình có 1 nghiệm kép x1 = x2 = -b/2a =" . $tinh;
            } else {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                $result = "Phương trình có 2 nghiệm phân biệt x1=" . $x1 . ",x2=" . $x2;
            }
        }
        return view('giaiptb2')->with(['result' => $result]);
    }
    public function nhapmember(Request $request)
    {
        $memberId = $request->input('memberId');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $address = $request->input('Address');
        $Rdate = date('Y/m/d');
        $stars = 0;
        $message = 'Nhập thành công';
        DB::insert('insert into members (MemberID, MemberName, Tel, Email, Address, JoinDate, Stars)
        value (?, ?, ?, ?, ?, ?, ?)',
        [$memberId, $name, $phone, $email, $address, $Rdate, $stars]);

        // $user = DB::

        return redirect('nhapsanpham')->with('status', 'Member đã được nhập thành công');
    }

    public function nhapproduct(Request $request) {
        $productId = $request->input('productid');
        $productname = $request->input('productname');
        $unit = $request->input('unit');
        $cost = $request->input('cost');
        $message = 'Nhập thành công';
        DB::insert('insert into products (ProductID, ProductName, Unit, Cost)
        value (?, ?, ?, ?)', [$productId, $productname, $unit, $cost]);

        return redirect('nhapproduct')->with('status', 'Product đã được nhập thành công');
    }

    public function nhapinvoices(Request $request) {
        $invoicesNo = $request->input('invoicesNo');
        $invoicesDate = $request->input('invovicesDate');
        $memberId = $request->input('memberId');
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        DB::insert('insert into invoices (InvoiceNo, InvoiceDate, MemberId, ProductId, Quantity, Price) value
        (?, ?, ?, ?, ?, ?)', [$invoicesNo, $invoicesDate, $memberId, $productId, $quantity, $price]);

        return redirect('nhapinvoice')->with('status', 'Invoice đã được thêm');
    }
}


// Viết 3 view nhập liệu (Ít nhất 10 view)
//Cho: Member
//   : Products
//   : Invoices
// Nộp resource/views
// mycontroller.php
// web.php
