@extends('app.app.app')

@section('content')
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex mb-8">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-2">
                        <li>
                            <a href="/trang-chu" class="text-gray-500 hover:text-blue-600 transition-colors duration-200">
                                <i class="fas fa-home mr-1"></i>
                                Trang chủ
                            </a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-700">Giới thiệu</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 p-8 flex flex-col items-center justify-center">
                    <img src="{{ URL('upload-img/gioithieu.png') }}" class="max-w-full h-auto rounded-lg shadow-md"
                        alt="Giới thiệu">
                    <p class="mt-4 text-gray-600 text-center">Chúng tôi giúp bạn mua sắm sản phẩm mình yêu thích.</p>
                </div>

                <div class="md:w-1/2 p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">SmartChoice - WEBSITE BÁN TAI NGHE</h2>

                    <div class="prose prose-lg text-gray-600 space-y-4">
                        <p>Chúng tôi cũng đã và đang là những người tiêu dùng, nên hiểu rất rõ tầm quan trọng của một sản phẩm chất lượng.
                             Dù là khi làm việc, học tập, chơi game hay thư giãn, điều mà chúng ta cần vẫn là sự thoải mái
                            , tự tin và trải nghiệm âm thanh sống động khi sử dụng sản phẩm.</p>

                        <p>Với một thiết bị âm thanh tốt, bạn có thể bước qua những giới hạn, đắm chìm trong không gian âm nhạc,
                             thể hiện cá tính và tận hưởng trọn vẹn từng khoảnh khắc.</p>

                        <p>Từ niềm cảm hứng bất tận với âm thanh và công nghệ, chúng tôi đã cho ra đời đứa con tinh thần "SMARTCHOICE".
                             Với mong muốn mang đến cho khách hàng những mẫu tai nghe “chất nhất” đến từ các thương hiệu hàng đầu thế giới
                              như B&O, JBL, Marshall, Sony, Sennheiser… với mức giá vô cùng hợp lý.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
