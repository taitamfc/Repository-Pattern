B1: Chạy lệnh *php artisan make:model Post -a* để tạo các thành phần sau:
- App\Models\Post: Làm việc với CSDL
- Database\Factories\PostFactory: Dùng để tạo dữ liệu ảo
- create_posts_table: File migration để tạo table
- Database\Seeders\PostSeeder: Tạo dữ liệu mẫu
- App\Http\Requests\StorePostRequest: Validate dữ liệu thêm mới
- App\Http\Requests\UpdatePostRequest: Validate dữ liệu cập nhật
- App\Http\Controllers\PostController: Tạo controller
- App\Policies\PostPolicy: Sử dụng trong phân quyền

B2: Lần lượt tạo 2 thư mục 
- app/Repositories: chứa tất cả các file trong tầng Repositories
- app/Services: chứa tất cả các file trong tầng Services

B3: Tạo ra các file trong tầng Services
- Interfaces
    + app/Services/Interfaces/ServiceInterface.php: dùng để tạo ra interface chung cho cho tất cả các service interface
    + app/Services/Interfaces/PostServiceInterface.php: để sử dụng cho PostServiceInterface
- Services
    + app/Services/PostService.php: khai báo các phương thức cho controller gọi

B4: Kết nối PostService với PostServiceInterface để gọi ở controller
- app/Providers/AppServiceProvider.php
    + Use PostService và PostServiceInterface
    + Ràng buộc PostService và PostServiceInterface để sử dụng PostServiceInterface ở controller
B5: Sử dụng PostServiceInterface tại app/Http/Controllers/PostController
    + use PostServiceInterface
    + tiêm PostServiceInterface vào contructor

B6: Chạy server và truy cập đường dẫn /posts
    - Khai báo route resource để làm việc với posts
        + Route::resource('posts',\App\Http\Controllers\PostController::class);