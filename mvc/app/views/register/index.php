<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
                                
                                <form action="http://localhost/mvc/public/register/regUser" method="post">
                                    <div class="form-group col-lg-12">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" id="" value="">
                                    </div>

                                    <div class="form-group col-lg-12">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" id="" value="">
                                    </div>

                                    <div class="form-group col-lg-12">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" id="" value="">
                                    </div>
                                    <div class="form-group col-lg-12">
                                            <label>Account Type</label>
                                            <select name = "type">
                                                <option selected="selected">Specify an account type</option>
                                                <option value="user">Consumer</option>
                                                <option value="store">Store Owner</option>
                                            </select>
                                    </div>
                                    <p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
                                    </p>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </form>
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>

				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>
			</div>
		</div>
	</section>
</div>
