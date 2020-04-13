<?php
    include '../action/userAction.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
          <div class="card mx-auto w-50 my-5 border border-0">
              <div class="card-header bg-white text-dark border-0">
                  <h2 class="text-center">Add More Info</h2>
              </div>
              <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-row">
                            <div class="form-group col-md-12 mb-4">
                                <select name="address" id="address" class="w-100 form-control">
                                    <option value="" selected disabled  class="form-control">Address</option>
                                    <?php
                                    $addresses = array(
                                      ' 北海道 hokkaido',' 青森県 aomori',' 岩手県 iwate',' 宮城県 miyagi',' 秋田県 akita',' 山形県 yamagata',' 福島県 fukushima',' 茨城県 ibaraki',' 栃木県 tochigi',' 群馬県 gunma',' 埼玉県 saitama',' 千葉県 chiba',' 東京都 tokyo',' 神奈川県 kanagawa',' 新潟県 niigata',' 富山県 toyama',' 石川県 ishikawa',' 福井県 fukui',' 山梨県 yamanashi',' 長野県 nagano',' 岐阜県 gifu',' 静岡県 shizuoka',' 愛知県 aichi',' 三重県 mie',' 滋賀県 shiga',' 京都府 kyoto',' 大阪府 osaka',' 兵庫県 hyogo',' 奈良県 nara',' 和歌山県 wakayama',' 鳥取県 tottori',' 島根県 shimane',' 岡山県 okayama',' 広島県 hiroshima',' 山口県 yamaguchi',' 徳島県 tokushima',' 香川県 kagawa',' 愛媛県 ehime',' 高知県 kochi',' 福岡県 fukuoka',' 佐賀県 saga',' 長崎県 nagasaki',' 熊本県 kumamoto',' 大分県 oita',' 宮崎県 miyazaki',' 鹿児島県 kagoshima',' 沖縄県 okinawa','海外 overseas'
                                    );
                                    
                                    foreach($addresses AS $address):
                                    ?>

                                    <option value="<?php echo $address ?>"><?php echo $address ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="number" name="age" id="age" class="p-4 form-control" placeholder="age">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <select name="gender" id="" class="w-100 form-control">
                                    <option value="" selected disabled  class="form-control">Gender</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <select name="like" id="" class="w-100 form-control">
                                    <option value="" selected disabled  class="form-control">Like</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="job" id="job" class="p-4 form-control" placeholder="job">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="school" id="school" class="p-4 form-control" placeholder="school">
                            </div>
                            <div class="form-group col-md-12 mb-4">
                              <input type="text" name="hobby" id="" class="p-4 form-control" placeholder="Your Hobby">
                              <!-- <a data-toggle="collapse" href="#oneMoreHobby" aria-expanded="false" aria-controls="oneMoreHobby">
                              <i class="fas fa-plus-circle"></i>
                            </a>Add More Hobbies
                            </div> -->
                            </div>
                        <br>
                        <div class="form-group col-md-12 mb-4">
                          <input type="file" name="pic" id="" class="form-control">
                        </div>
                        <br>
                        <div class="form-group col-md-12 mb-4">
                        </div>
                        <br>
                        <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-dark form-control text-uppercase" name="add">Add</button>
                        </div>
                        <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-dark form-control text-uppercase" name="skip">Skip</button>
                        </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>