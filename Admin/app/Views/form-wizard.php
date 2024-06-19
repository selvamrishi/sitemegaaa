    <!doctype html>
    <html lang="en">

    <head>

        <?= $title_meta ?>

        <?= $this->include('partials/head-css') ?>

    </head>

    <?= $this->include('partials/body') ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?= $page_title ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Basic Wizard</h4>

                                    <div id="basic-example">
                                             <!-- 1.Details -->
                                             <h3>1.Details</h3>
                                            <section>
                                            <style>
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .form-container, .info-container {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 48%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            background-color: white;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container .consultation-time {
            display: flex;
            align-items: center;
        }

        .form-container .consultation-time input {
            width: auto;
            margin-right: 10px;
            text-align: center;
        }

        .info-container {
            background-color: #e9e9e9;
        }

        .info-container h2 {
            margin-top: 0;
        }

        .info-container p {
            margin-bottom: 20px;
        }
          .notification {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .error {
            display: none;
            color: red;
            margin-bottom: ;
        }
    </style>

    <div class="container">
        <div class="form-container">
        <div class="error" id="error-message"></div>
            <label for="room-name">Room Name</label>
            <input type="text" id="room-name" name="room-name">

            <label for="description">Description</label>
            <input type="text" id="description" name="description">

            <label for="consultation-time">Consultation Time</label>
            <div class="consultation-time">
                <input type="number" id="consultation-time" name="consultation-time" value="4" min="1">
                <span> X 15 min = 60 Minutes</span>
            </div>

            <label for="cost">Cost $</label>
            <input type="text" id="cost" name="cost"><button onclick="retrieveData()" class="btn btn-secondary">Retrieve Data</button>
            <center><button onclick="storeData()" class="btn btn-primary">Submit</button></center>
        </div>
        <div class="notification" id="notification">
    Data stored successfully!
</div>
<script>
    function showNotification() {
        const notification = document.getElementById('notification');
        notification.style.display = 'block';
        setTimeout(() => {
            notification.style.display = 'none';
        }, 5000);
    }

    function showError(message) {
        const errorMessage = document.getElementById('error-message');
        errorMessage.textContent = message;
        errorMessage.style.display = 'block';
    }

    function storeData() {
        const roomName = document.getElementById('room-name').value;
        const description = document.getElementById('description').value;
        const consultationTime = document.getElementById('consultation-time').value;
        const cost = document.getElementById('cost').value;

        if (!roomName || !description || !consultationTime || !cost) {
            showError('All fields are required.');
            return;
        }

        localStorage.setItem('roomName', roomName);
        localStorage.setItem('description', description);
        localStorage.setItem('consultationTime', consultationTime);
        localStorage.setItem('cost', cost);

        document.getElementById('error-message').style.display = 'none';
        showNotification();
    }

    function retrieveData() {
        const roomName = localStorage.getItem('roomName');
        const description = localStorage.getItem('description');
        const consultationTime = localStorage.getItem('consultationTime');
        const cost = localStorage.getItem('cost');

        if (roomName || description || consultationTime || cost) {
            document.getElementById('room-name').value = roomName;
            document.getElementById('description').value = description;
            document.getElementById('consultation-time').value = consultationTime;
            document.getElementById('cost').value = cost;
        } else {
            alert('No data found in local storage.');
        }
    }
</script>

        <div class="info-container">
            <h3>Virtual Consultation Room Setup</h3>
            <p>Welcome to our Virtual Consultation Room! Here, we provide a comprehensive and professional environment for your client meetings. Below, you'll find resources and links to enhance your consultation experience, including external links to professional bodies, universities, and specialists.</p>

            <h3>Resources:</h3>
            <p>Upload documents, reports, and presentations relevant to your consultation. Access to external links for professional bodies, universities, and specialists. Set the mood with customizable backgrounds and themes for a professional and comfortable atmosphere.</p>

            <p>Schedule and manage appointments seamlessly with integrated calendar tools. Secure communication channels for confidential discussions and file sharing. Prepare for your consultation and make the most of your time with our carefully curated resources and user-friendly interface. Your clients will appreciate the professionalism and efficiency of our Virtual Consultation Room.</p>
        </div>
    </div>
    </section>
          
              <!-- 2.Links -->
              <h3>2.Links</h3>
                                            <section>
                                           
                                           <style>
       
       .container {
           max-width:100%;
           margin: 0 auto;
           padding: 20px;
           background-color: #fff;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           border-radius: 10px;
       }
     
       .link-card {
           border: 1px solid #ccc;
           border-radius: 10px;
           padding: 20px;
           height:40%;  
           width: 50%%;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           position: relative;
           background-color: #fff;
       }
       .add-link-form {
        border: 1px solid #ccc;
           border-radius: 10px;
           padding: 20px;
           height:40%;  
           width: 50%%;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           position: relative;
           background-color: #fff;
       }
       .link-card h2 {
           margin-top: 0;
       }
       .icons {
           position: absolute;
           top: 20px;
           right: 20px;
           display: flex;
           align-items: center;
       }
       .icons img {
           width: 40px;
           height: 40px;
           margin-right: 10px;
       }
       .edit-link {
           text-decoration: none;
           background: ;
           padding: 5px;
           border-radius: 5px;
           color: black;
           font-weight: bold;
       }
       .add-link-form h3 {
           margin-top: 0;
           text-align: center;
       }
       .add-link-form label {
           display: block;
           margin: 10px 0 5px;
       }
       .add-link-form input,
       .add-link-form select {
           width: 100%;
           padding: 10px;
           margin-bottom: 10px;
           border: 1px solid #ccc;
           border-radius: 5px;
       }
       .add-link-form button {
           padding: 10px 20px;
           background-color: green;
           color: white;
           border: none;
           border-radius: 5px;
           cursor: pointer;
           display: block;
           margin: 0 auto;
       }
       .checkboxx-group{
      display:inline-block;
      gap:20px;
       }
       .row{
        display:column;
       }
   </style>
  <h3>Canine - Quality of Life</h3>
   <div class="container">
    
       
           <div class="link-card">
               <h2>Link 1</h2>
               <p>Lorem ipsum dolor sit amet dfgdfsdsd dfsdgaahr r erqeryqer qer erqyqery qre erqq ertyqery ery</p>
               <div class="icons">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmeigqtqV6aJBOBsPJbjtUG8BFU4f2d2o4Xbq3z8kQNr23JJY_ac58t-cAM2JSTC60ncM&usqp=CAU" class="rounded mx-auto d-block" alt="...">
                   <a href="#" class="edit-link">Edit</a>
               </div>
               <div class="checkboxx-group">
                     <div class ="row">
                       <label>Provider</label>
                       <input type="checkbox" checked> Portal
                       <input type="checkbox"> Website
                   </div>
                     <div  class ="row">
                       <label>Client</label>
                       <input type="checkbox" checked> Portal
                       <input type="checkbox"> Email Pre Consult
                   </div>
               </div>
           </div>
       
       <div class="add-link-form">
       <div><a href="#" class="edit-link">
                +Add Link</a></div>
         <form>
               <label for="link-name">Link Name</label>
               <input type="text" id="link-name" name="link-name" placeholder="Short name for your link so it appears better">
               
               <label for="url-link">URL Link</label>
               <input type="text" id="url-link" name="url-link" placeholder="Fully qualified URL">
               
               <label for="type-of-link">Type of Link</label>
               <select id="type-of-link" name="type-of-link">
                   <option value="image">Image</option>
                   <option value="video">Video</option>
                   <option value="document">Document</option>
                   <option value="professional-bodies">Professional Bodies</option>
                   <option value="universities">Universities</option>
                   <option value="specialists">Specialists</option>
               </select>
               
               <div class="checkbox-group-row">
                   <div>
                       <label>Provider</label>
                       <div class="row"><input type="checkbox">Portal</div>
                       <div class="row"><input type="checkbox">Website</div>
                   </div>
                   <div>
                       <label>Client</label>
                       <input type="checkbox"> Portal
                       <input type="checkbox"> Email Pre-consult
                       <input type="checkbox"> Email Post-consult
                       <input type="checkbox"> Desecretion
                   </div>
               </div>
               <button type="submit">OK</button>
           </form>
       </div>
   </div>  
   <script>
       document.querySelector('form').addEventListener('submit', function(e) {
           e.preventDefault();
           
           const linkName = document.getElementById('link-name').value;
           const urlLink = document.getElementById('url-link').value;
           const typeOfLink = document.getElementById('type-of-link').value;

           const newLinkCard = document.createElement('div');
           newLinkCard.classList.add('link-card');
           
           newLinkCard.innerHTML = `
               <h2>${linkName}</h2>
               <p>${urlLink}</p>
               <div class="icons">
                   <img src="${typeOfLink}-icon.png" alt="${typeOfLink} Icon">
                   <a href="#" class="edit-link">Edit</a>
               </div>   
               <div class="checkbox-group">
                   <div>
                       <label>Provider</label>
                       <input type="checkbox"> Portal
                       <input type="checkbox"> Website
                   </div>
                   <div>
                       <label>Client</label>
                       <input type="checkbox"> Portal
                       <input type="checkbox"> Email Pre Consult
                   </div>
               </div>
           `;

           document.querySelector('.link-cards').appendChild(newLinkCard);
       });
   </script>

                                           </section>
                                             <!-- 4.Documentation -->
                                             <h3>4.Documentation</h3>
                                            <section>
                                               
                                            </section>

                                            <!-- 5.Products & Services -->
                                            <h3>5.Products & Services</h3>
                                            <section>
                                                
                                            </section>

                                            <!-- 6.Theme -->
                                            <h3>6.Theme</h3>
                                            <section>
                                               
                                            </section>

                                             <!-- 7.Preview -->
                                             <h3>7.Preview</h3>
                                            <section>
                                               
                                            </section>
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                         

                   

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?= $this->include('partials/right-sidebar') ?>

    <?= $this->include('partials/vendor-scripts') ?>

    <!-- jquery step -->
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <script src="assets/js/app.js"></script>

    </body>

    </html>