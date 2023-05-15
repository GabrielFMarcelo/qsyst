<?php
class view extends config{
        public function viewTableData(){
          $con = $this->con();
          $sql = "SELECT * FROM `tbl_transaction`";
          $data = $con->prepare($sql);
          $data->execute();
          $result = $data->fetchAll(PDO::FETCH_ASSOC);
          echo "<h3 class='mb-4 mt-5'> User </h3>";
          echo "<table class='table table-dark table-striped table-sm'>";
          echo "<thead>
                  <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th></th>
                  </tr>
                </thead><tbody>";
                foreach ($result as $data) {
                  echo "</tr>";
                    echo "<td><a class='' href='show.php' target='_blank'>$data[name]</a></td>";
                      echo "<td>$data[type]</td>";
                  echo "</tr>";
                }
          echo "</tbody></table>";
        }

        public function showUsers($id){
          $con = $this->con();
          $id = isset($_GET['id']) ? $_GET['id'] : '';
          $sql = "SELECT * FROM `tbl_transaction` WHERE id = $id";
          $data = $con->prepare($sql);
          $data->execute();
          $result = $data;
          // Output the data for the specified ID
          foreach ($result as $data) {
            echo "<table class='table table-dark table-hover table-striped mt-4 col-md-6 mx-auto text-center'>";
            echo "<thead>
                    <tr>
                      <th>Name</th>
                      <th>Queing Number</th>
                    </tr>
                  </thead><tbody>";

                  echo "<tr>";

                  echo "<td>";
                  echo $data['name'];
                  echo "</a>";
                  echo "</td>";

                  echo "<td>";
                  echo $data['tn'];
                  echo "</td>";

                  echo "</tr>";

                  echo "</tbody></table>";
          }
        }

        public function userInfo(){
          $con = $this->con();
          $id = isset($_GET['id']) ? $_GET['id'] : '';
          $sql = "SELECT `id`,`name`,`type` FROM `tbl_transaction`";
          $data = $con->prepare($sql);
          $data->execute();
          $result = $data;

          while ($row = $result->fetch()) {
            echo "<h6 class='text-center font-weight-light pt-0 mt-0' style='letter-spacing: ; font-size: 20px;'>click name to view information</h6>";
            echo "<table class='table table-dark table-hover table-striped col-md-6 mx-auto text-center'>";
            echo "<thead>
                    <tr>
                      <th>Name</th>
                      <th>Type</th>
                    </tr>
                  </thead><tbody>";

            echo "<tr>";

            echo "<td>";
            echo "<a class='name-link' style='color:white' href='show.php?id={$row['id']}'>";
            echo $row['name'];
            echo "</a>";
            echo "</td>";

            echo "<td>";
            echo $row['type'];
            echo "</td>";

            echo "</tr>";

            echo "</tbody></table>";
          }
        }
      }
