<!-- Register -->
<div class="sign" id="register">
    <div class="sign-class">
        <div style="float: right;cursor: pointer;" class="menu-bars" onclick="register()">
            <img src="https://img.icons8.com/material-outlined/15/000000/delete-sign.png" />
        </div>
        <h1>Welcome to Fitness</h1>
        <h4>Join to use</h4>
        <div class="field">
            <div style="width: 50%;" class="input_field">
                <label htmlFor="">First Name</label>
                <input style="width: 95%;" type="text" name="first" placeholder="First Name" id="" />
            </div>
            <div style="width: 50%;" class="input_field">
                <label htmlFor="">Last Name</label>
                <input style="width: 95%;" type="text" name="last" placeholder="Last Name" id="" />
            </div>
        </div>
        <div class="field">
            <div style="width: 50%;" class="input_field">
                <label htmlFor="">Email or Phone No.</label>
                <input style="width: 95%;" type="email" name="email" placeholder="example@gmail.com" id="" />
            </div>
            <div style="width: 50%;" class="input_field">
                <label htmlFor="">Password</label>
                <input style="width: 95%;" type="password" name="password" placeholder="Min 8 character" id="" />
            </div>
        </div>
        <div class="input_field">
            <label htmlFor="">Phone No.</label>
            <input type="phone" name="phone" placeholder="9999999999" id="" />
        </div>
        <div class="login_btn">
            <button>Sign Up</button>
        </div>
        <div class="google-field">
            <small>OR Continue with</small>
        </div>
        <div class="google-btn">
            <div class="btn-1">
                <img src="https://img.icons8.com/color/48/ffffff/google-logo.png" />
                <p>Google</p>
            </div>
            <div class="btn-2">
                <img src="https://img.icons8.com/color/48/ffffff/facebook-new.png" />
                <p>FaceBook</p>
            </div>
        </div>
        <div class="already">
            <p>Have a account, <span onclick="register()">Sign In</span></p>
        </div>
    </div>
</div>
