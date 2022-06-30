<div class="center">
    <div class="content" style="margin-top: 350px;">
        <div class="profile">
            <div class="profile-card">
            <img src="Assets/images/johndoe.jpg" class="roundedprofile">
            <h1 style="padding-top: 40px;font-weight: bolder;font-size: 45px;">{{ Auth::user()->name }}</h1>
            <p>Points : {{ Auth::user()->points }}</p>
          </div>
        </div>
        <div class="tabset">
            <!-- Tab 1 -->
            <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
            <label for="tab1">4 Question</label>
            <!-- Tab 2 -->
            <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
            <label for="tab2">3 Answer</label>
            
            <div class="tab-panels">
              <section id="marzen" class="tab-panel">
                <div class="question-detail-card" style="position:unset; max-width: 40%; ;height: auto; margin-left: auto; margin-right: auto; margin-bottom: 20px; ">
                  <container>
                    <pic style="padding-right: unset;">
                      <img class="profile-pic" src="assets/profile_pic.png" alt="profile">
                    </pic>
                    <text style="width: 100%;">
                      <b><p>Lorem ipsum This is the question title.</p></b>
                      <p id="content">Lorem ipsum this is a bite more description about the question</p>
                      <button class="question-card-button" style="background-color: #fbc748;width: auto; padding: 15px 25px 15px 25px;float: right;" onclick ="location.href='#'"> Add an answer </button>
                    </text>
                  </container>
                </div>

                <div class="question-detail-card" style="position:unset; max-width: 40%; ;height: auto; margin-left: auto; margin-right: auto; margin-bottom: 20px; ">
                  <container>
                    <pic style="padding-right: unset;">
                      <img class="profile-pic" src="assets/profile_pic.png" alt="profile">
                    </pic>
                    <text style="width: 100%;">
                      <b><p>Lorem ipsum This is the question title.</p></b>
                      <p id="content">Lorem ipsum this is a bite more description about the question</p>
                      <button class="question-card-button" style="background-color: #fbc748;width: auto; padding: 15px 25px 15px 25px;float: right;" onclick ="location.href='#'"> Add an answer </button>
                    </text>
                  </container>
                </div>

                <div class="question-detail-card" style="position:unset; max-width: 40%; ;height: auto; margin-left: auto; margin-right: auto; margin-bottom: 20px; ">
                  <container>
                    <pic style="padding-right: unset;">
                      <img class="profile-pic" src="assets/profile_pic.png" alt="profile">
                    </pic>
                    <text style="width: 100%;">
                      <b><p>Lorem ipsum This is the question title.</p></b>
                      <p id="content">Lorem ipsum this is a bite more description about the question</p>
                      <button class="question-card-button" style="background-color: #fbc748;width: auto; padding: 15px 25px 15px 25px;float: right;" onclick ="location.href='#'"> Add an answer </button>
                    </text>
                  </container>
                </div>

                <div class="question-detail-card" style="position:unset; max-width: 40%; ;height: auto; margin-left: auto; margin-right: auto; margin-bottom: 20px; ">
                  <container>
                    <pic style="padding-right: unset;">
                      <img class="profile-pic" src="assets/profile_pic.png" alt="profile">
                    </pic>
                    <text style="width: 100%;">
                      <b><p>Lorem ipsum This is the question title.</p></b>
                      <p id="content">Lorem ipsum this is a bite more description about the question</p>
                      <button class="question-card-button" style="background-color: #fbc748;width: auto; padding: 15px 25px 15px 25px;float: right;" onclick ="location.href='#'"> Add an answer </button>
                    </text>
                  </container>
                </div>
                
              </section>
              <section id="rauchbier" class="tab-panel">
                <div class="question-detail-card" style="position:unset; max-width: 40%; ;height: auto; margin-left: auto; margin-right: auto; ">
                  <container>
                    <pic style="padding-right: unset;">
                      <img class="profile-pic" src="assets/profile_pic.png" alt="profile">
                    </pic>
                    <text style="width: 100%;">
                      <b><p>Lorem ipsum This is the question title.</p></b>
                      <p id="content">Lorem ipsum this is a bite more description about the question</p></text>
                  </container>
                </div>
                <div class="question-detail-card" style="position:unset; max-width: 40%; ;height: auto; margin-left: auto; margin-right: auto; ">
                  <container>
                    <pic style="padding-right: unset;">
                      <img class="profile-pic" src="assets/profile_pic.png" alt="profile">
                    </pic>
                    <text style="width: 100%;">
                      <b><p>Top Answerer's Name.</p></b>
                      <p id="content">Lorem ipsum this is a bite more description about the question. aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                      <button class="button-read-more" onclick ="location.href='#'"> Read more </button>
                      <button class="question-card-button" style="background-color: #fbc748;width: auto; padding: 15px 25px 15px 25px;float: right;" onclick ="location.href='#'"> Add an answer </button>
                    </text>
                  </container>
                </div>  
              </section>
            </div>
        </div>
      </div>
    </div>
  </div>