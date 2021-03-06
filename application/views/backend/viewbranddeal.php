<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="<?php echo site_url("site/createbranddeal?id=").$this->input->get('id'); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                branddeal Details
            </header>
            <div class="drawchintantable">
                <?php $this->chintantable->createsearch("branddeal List");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
<!--                            <th data-field="brand">Brand</th>-->
                            <th data-field="description">Description</th>
<!--                            <th data-field="json">Json</th>-->
                            <th data-field="isfeatured">Is Featured</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <?php $this->chintantable->createpagination();?>
            </div>
        </section>
        <script>
            function drawtable(resultrow) {
                if(resultrow.isfeatured=="1")
                {
                    resultrow.isfeatured="YES";
                }
                else
                {
                    resultrow.isfeatured="NO";
                }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.description + "</td><td>" + resultrow.isfeatured + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editbranddeal?id=');?>" + resultrow.brand + "&branddealid="+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletebranddeal?id='); ?>" + resultrow.brand + "&branddealid="+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
