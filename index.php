<?php 
require 'conn.php';
$query = mysqli_query($conn, 'SELECT count(*) as total from `file`');
while($fetch = mysqli_fetch_array($query)){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/97a1f18299.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="main">
      <div class="box">
        <div class="status">
          <h4>
            <span class="dot" style="background-color: red"></span> Incomplete
          </h4>
          <p>0</p>
        </div>
        <div class="catalogs">
          <div class="catalog" style="background-color: #ffdd59">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  <?php echo $fetch['total'];?>
                </div>
                <?php
	}
?>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <input type="file" id="file" />
                          <button
                            type="button"
                            id="upload"
                            style="float: right"
                            class="btn-btn-primary"
                          >
                            Upload
                          </button>
                          <br />

                          <div id="msg"></div>
                          <br />
                        </form>
                        <div class="col-md-8">
                          <table class="table table-bordered">
                            <thead class="alert-info">
                              <tr>
                                <th>Uploaded File</th>
                              </tr>
                            </thead>
                            <tbody id="result"></tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
          </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="status">
          <h4>
            <span class="dot" style="background-color: blue"></span> To Do 
          </h4>
          <p>0</p>
        </div>
        <div class="catalogs">
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="status">
          <h4>
            <span class="dot" style="background-color: yellow"></span> To Doing
          </h4>
          <p>0</p>
        </div>
        <div class="catalogs">
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="status">
          <h4>
            <span class="dot" style="background-color: pink"></span> Under Review
          </h4>
          <p>0</p>
        </div>
        <div class="catalogs">
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="status">
          <h4>
            <span class="dot" style="background-color: green"></span> Success
          </h4>
          <p>0</p>
        </div>
        <div class="catalogs">
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
          <div class="catalog">
            <div class="content">
              <div class="catalog-header">
                <div class="client-name">
                  <img src="assets/image/profile.png" alt="" />
                  <p>Client Name</p>
                </div>
                <div class="customer-name">
                  <img src="assets/image/man.png" alt="" />
                  <p>Customer Name</p>
                </div>
              </div>
              <div class="catalog-body">
                <div>
                  <p>
                    <i class="fa-solid fa-outdent"></i> Lorem ipsum dolor sit
                    amet consectetur...
                  </p>
                </div>
                <div class="tags">
                  <p><i class="fa-solid fa-tag"></i> 1/2</p>
                </div>
              </div>
              <div class="catalog-footer">
                <div><img src="assets/image/employee.png" alt="" /></div>
                <div><img src="assets/image/woman.png" alt="" /></div>
                <div><i class="fa-sharp fa-solid fa-circle-info"></i></div>
                <div><i class="fa-solid fa-comment"></i> 15</div>
                <div>
                  <i
                    class="fa-solid fa-paperclip"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                  ></i>
                  0
                </div>
                <!-- Modal Start -->
                <div
                  class="modal fade"
                  id="staticBackdrop"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <!-- <input type="file" id="myFile" name="filename" /></br>
                          <input class="btn btn-primary btn-sm" type="submit" value="Save" style="float
                          :right" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->
                <div>
                  <i class="fa-solid fa-calendar-days"> 22/03/2023</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
