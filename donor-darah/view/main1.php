<!-- content -->
<div class="content">
	<div class="container">
		<div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<img class="img-responsive" src="images/pic1.jpg" alt=" " />
		</div>
		<div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
			<div class="welcome">
				<h3>Welcome To Infirmary</h3>
				<ul>
					<li><a href="#">Accusantium Doloremque Accus</a></li>
					<li><a href="#">Molestiae Consequatur Molestiae</a></li>
					<li><a href="#">Nostrum Exercitationem Nostrum</a></li>
					<li><a href="#">Consequuntur Magnidolor Nostrum</a></li>
					<li><a href="#">Molestiae Consequatur Molestiae</a></li>
					<li><a href="#">Nostrum Exercitationem Nostrum</a></li>
					<li><a href="#">Consequuntur Magnidolor Nostrum</a></li>
				</ul>
			</div>
		</div>
		<div id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<h3>Book An Appointment</h3>
			<form action="#" method="post">
				<input type="text" name="Name" value="Name" onfocus="this.value='';" onblur="if(this.value=='') {this.value='Name';}" required="">
				<input type="text" name="Email" value="Email" onfocus="this.value='';" onblur="if(this.value=='') {this.value='Email';}" required="">
				<input class="date" name="19/10/2016" id="datepicker" type="text" value="19/10/2016" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2016';}" required="">
				<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
					<option value="null">Select Department</option>
					<option value="null">Health Care</option> 
					<option value="null">Body Checkup</option>					
					<option value="null">Out Patient</option>
					<option value="null">Surgery</option>											
				</select>
				<input type="submit" value="Book Now">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //content -->