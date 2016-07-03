<h1>Xin chào, {{ $username }}!</h1>
<p>Xin cảm ơn bạn đã mua hàng tại Mito Mart. Bạn đã mua các sản phẩm</p>
<table border="1" style="width:100%"  align="center">
	<thead>
		<tr>
			<th>Sản phẩm</th>
			<th>Số lượng</th>
			<th>Giá sản phẩm (đã bao gồm giảm giá)</th>
			<th>Thành tiền</th>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($content as $item)
		<tr>
			<td> {{ $item->name }}</td>
			<td> {{ $item->qty}}</td>
			<td> {{ number_format($item->price)}} VNĐ</td>
			<td> {{ number_format(($item->price)*($item->qty))}} VNĐ</td>
		</tr>
		@endforeach
	</tbody>
</table>
<p><h2 style="color:red">Tổng giá trị đơn hàng: {{number_format($total + 30000)}} VMĐ</h2>
<p>Chúng tôi sẽ liên lạc với bạn qua điện thoại để xác nhận đơn hàng này. Hoặc bạn có thể trả lời bằng email để xác nhận đơn hàng. Xin cảm ơn!</p>