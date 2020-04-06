<form action="{{ url('cart') }}" method="post">
    {{ csrf_field() }}
    <button type="submit" class="btn btn1"><img src="icon/shopping-bag.svg">اضافه کردن به سبد خرید</button>

    <div class="input-group number-spinner">

				<span class="input-group-btn">
					<button class="btn btn-default" id="rightBtn" data-dir="dwn"><img src="icon/minus.svg"></button>
				</span>
        <input type="text" name="Number" class="form-control text-center" value="1" maxlength="2">
        <span class="input-group-btn">
					<button class="btn btn-default" id="leftBtn" data-dir="up"><img src="icon/plus.svg"></button>
				</span>
    </div>

</form>
