<?= $this->extend('backend/layout/layout') ?>
<?= $this->section('content') ?>
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Authors</div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="data-table table nowrap dataTable no-footer dtr-inline collapsed" id="DataTables_Table_0"
                           role="grid">
                        <thead>
                        <tr role="row">
                            <th class="table-plus sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Gender: activate to sort column ascending">Gender
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Weight: activate to sort column ascending" style="">Weight
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Assigned Doctor: activate to sort column ascending" style="">Assigned Doctor
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Admit Date: activate to sort column ascending" style="">Admit Date
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Disease: activate to sort column ascending" style="">Disease
                            </th>
                            <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                                style="display: none;">Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr role="row" class="odd">
                            <td class="table-plus sorting_1" tabindex="0">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="/backend/vendors/images/photo8.jpg" class="border-radius-100 shadow"
                                             width="40" height="40" alt="">
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">Christian Dyer</div>
                                    </div>
                                </div>
                            </td>
                            <td>Male</td>
                            <td style="">80 kg</td>
                            <td style="">Dr. Sebastian Tandon</td>
                            <td style="">15 Jun 2020</td>
                            <td style="">
                                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Diabetes</span>
                            </td>
                            <td style="display: none;">
                                <div class="table-actions">
                                    <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                            class="icon-copy dw dw-edit2"></i></a>
                                    <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                            class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="table-plus sorting_1" tabindex="0">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="/backend/vendors/images/photo5.jpg" class="border-radius-100 shadow"
                                             width="40" height="40" alt="">
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">Doris L. Larson</div>
                                    </div>
                                </div>
                            </td>
                            <td>Male</td>
                            <td style="">76 kg</td>
                            <td style="">Dr. Ren Delan</td>
                            <td style="">22 Jul 2020</td>
                            <td style="">
                                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Dengue</span>
                            </td>
                            <td style="display: none;">
                                <div class="table-actions">
                                    <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                            class="icon-copy dw dw-edit2"></i></a>
                                    <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                            class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="table-plus sorting_1" tabindex="0">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="/backend/vendors/images/photo1.jpg" class="border-radius-100 shadow"
                                             width="40" height="40" alt="">
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">Doris L. Larson</div>
                                    </div>
                                </div>
                            </td>
                            <td>Male</td>
                            <td style="">76 kg</td>
                            <td style="">Dr. Ren Delan</td>
                            <td style="">22 Jul 2020</td>
                            <td style="">
                                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Dengue</span>
                            </td>
                            <td style="display: none;">
                                <div class="table-actions">
                                    <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                            class="icon-copy dw dw-edit2"></i></a>
                                    <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                            class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="table-plus sorting_1" tabindex="0">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="/backend/vendors/images/photo9.jpg" class="border-radius-100 shadow"
                                             width="40" height="40" alt="">
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">Jake Springer</div>
                                    </div>
                                </div>
                            </td>
                            <td>Female</td>
                            <td style="">45 kg</td>
                            <td style="">Dr. Garrett Kincy</td>
                            <td style="">08 Oct 2020</td>
                            <td style="">
                                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Covid 19</span>
                            </td>
                            <td style="display: none;">
                                <div class="table-actions">
                                    <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                            class="icon-copy dw dw-edit2"></i></a>
                                    <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                            class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="table-plus sorting_1" tabindex="0">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <img src="/backend/vendors/images/photo4.jpg" class="border-radius-100 shadow"
                                             width="40" height="40" alt="">
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600">Jennifer O. Oster</div>
                                    </div>
                                </div>
                            </td>
                            <td>Female</td>
                            <td style="">45 kg</td>
                            <td style="">Dr. Callie Reed</td>
                            <td style="">19 Oct 2020</td>
                            <td style="">
                                <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"
                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Typhoid</span>
                            </td>
                            <td style="display: none;">
                                <div class="table-actions">
                                    <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                            class="icon-copy dw dw-edit2"></i></a>
                                    <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                            class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
