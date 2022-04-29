Create database KIPSO 
drop database KIPSO
Create table NguoiDung 
(
	IdTaiKhoan int not null,
	HoTen nvarchar(50),
	GioiTinh nvarchar(4),
	NgaySinh date,
	SDT nvarchar(50), 
	Email nvarchar(50) not null,
	ChucVu nvarchar(50),
	TenDangNhap nvarchar(50) not null,
	primary key (Email),
	foreign key (IdTaiKhoan) references TaiKhoan
)

Create table TaiKhoan
(
	TenDangNhap nvarchar(50) not null,
	MatKhau nvarchar(50),
	IdTaiKhoan int,
	primary key (IdTaiKhoan)
)

Create table Khoahoc
(
	IdKhoaHoc int not null,
	TenKhoaHoc nvarchar(50),
	CapDo nvarchar(6),
	DonGia int,
	primary key (IdKhoaHoc)
)

Create table LienHe
(
	Email nvarchar(50) not null,
	HoTen nvarchar(50),
	Messenger nvarchar(500),
	primary key (Email)
)

--INSERT DATA
insert into NguoiDung values 
	('ID_001', N'Mai Thùy Chiêu', N'Nữ', '2001/01/15', 0987654345,'chieu@gmail.com', N'Nhân viên', N'admin1'),
	('ID_002', N'Nguyễn Thanh Thảo', N'Nữ', '2001/07/19', 0998845611,'thao@gmail.com', N'Nhân viên', N'admin2'),
	('ID_003', N'Lê Kim Quốc Chung', N'Nam', '2001/09/23', 0905310889, 'chung@gmail.com', N'Học viên', N'chungLe'),
	('ID_004', N'Đỗ Như Quỳnh', N'Nữ', '2001/07/19', 0931547777, 'quynh@gmail.com', N'Học viên', N'quynhDo'),
	('ID_005', N'Nguyễn Hồ Anh Thư', N'Nữ', '2001/07/30', 0899512300, 'thu@gmail.com', N'Học viên', N'thuNguyen'),
	('ID_006', N'Vũ Thị Việt Trinh', N'Nữ', '2001/11/22', 0987654322, 'trinh@gmail.com', N'Học viên', N'trinhVu')

select * from NguoiDung

insert into TaiKhoan values
	(N'admin1', N'admin1','ID_001'),
	(N'admin2', N'admin2','ID_002'),
	(N'chungLe', N'chungLe','ID_003'),
	(N'quynhDo', N'quynhDo','ID_004'),
	(N'thuNguyen', N'thuNguyen','ID_005'),
	(N'trinhVu', N'trinhVu','ID_006')
select * from TaiKhoan