@extends('yesica')
@section('cuerpo')
    <h4>Personal</h4>
        <div class="add-product">
            <a href="product-edit.html">Agregar Personal</a>
        </div>
        
        <table>
            <tr>
                <th>Image</th>
                                  <th>Product Title</th>
                                  <th>Status</th>
                                  <th>Purchases</th>
                                  <th>Product sales</th>
                                  <th>Stock</th>
                                  <th>Price</th>
                                  <th>Setting</th>
                              </tr>
                              <tr>
                                  <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                  <td>Product Title 1</td>
                                  <td>
                                      <button class="pd-setting">Active</button>
                                  </td>
                                  <td>50</td>
                                  <td>$750</td>
                                  <td>Out Of Stock</td>
                                  <td>$15</td>
                                  <td>
                                      <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                  <td>Product Title 2</td>
                                  <td>
                                      <button class="ps-setting">Paused</button>
                                  </td>
                                  <td>60</td>
                                  <td>$1020</td>
                                  <td>In Stock</td>
                                  <td>$17</td>
                                  <td>
                                      <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                  <td>Product Title 3</td>
                                  <td>
                                      <button class="ds-setting">Disabled</button>
                                  </td>
                                  <td>70</td>
                                  <td>$1050</td>
                                  <td>Low Stock</td>
                                  <td>$15</td>
                                  <td>
                                      <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                  <td>Product Title 4</td>
                                  <td>
                                      <button class="pd-setting">Active</button>
                                  </td>
                                  <td>120</td>
                                  <td>$1440</td>
                                  <td>In Stock</td>
                                  <td>$12</td>
                                  <td>
                                      <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                  <td>Product Title 5</td>
                                  <td>
                                      <button class="pd-setting">Active</button>
                                  </td>
                                  <td>30</td>
                                  <td>$540</td>
                                  <td>Out Of Stock</td>
                                  <td>$18</td>
                                  <td>
                                      <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                  <td>Product Title 6</td>
                                  <td>
                                      <button class="ps-setting">Paused</button>
                                  </td>
                                  <td>400</td>
                                  <td>$4000</td>
                                  <td>In Stock</td>
                                  <td>$10</td>
                                  <td>
                                      <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                      <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </td>
                              </tr>
                          </table>
    
@endsection