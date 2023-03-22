<style>
    .mailbox-attachment-icon {
        max-height: none;
    }
    .mailbox-attachment-info {
        background: #fff;
        padding: 2%;
    }
    .mailbox-attachments .img-thumbnail {
        border: 1px solid #fff;
        border-radius: 0;
        background-color: #fff;
    }
    .mailbox-attachment-icon.has-img>img {
        aspect-ratio:1/1;
    }
    .mailbox-attachments li {
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.08);
        border: 0;
        background: #fff;
    }

    body.dark-mode .table {
        background-color: #2c2c43;
    }
    body.dark-mode .mailbox-attachments .img-thumbnail {
        border-color: #223;
        background-color: #223;
    }
    body.dark-mode .mailbox-attachment-info {
        background: #223;
    }
    body.dark-mode .mailbox-attachments li {
        border-color: #223;
        background-color: #223;
    }
    body.dark-mode .mailbox-attachment-name {
        color: #a8a9bb
    }
    .spanStyle{  
      white-space: nowrap;  /*强制span不换行*/
      display: inline-block;  /*将span当做块级元素对待*/
      width: 40%;  /*限制宽度*/
      height: 100%;
      overflow: hidden;  /*超出宽度部分隐藏*/
      text-overflow: ellipsis;  /*超出部分以点号代替*/
    }
    .spanStyle2{  
      white-space: nowrap;  /*强制span不换行*/
      display: inline-block;  /*将span当做块级元素对待*/
      overflow: hidden;  /*超出宽度部分隐藏*/
      text-overflow: ellipsis;  /*超出部分以点号代替*/
    }

    .divMargin{  
      float: right;
    }
</style>


<div class="dcat-box">

    @include('admin::grid.table-toolbar')

    {!! $grid->renderFilter() !!}

    {!! $grid->renderHeader() !!}

        <div class="row">
            @foreach($grid->rows() as $row)
                <div class="col-6 col-sm-6 col-md-3 col-lg-2" style="padding: 1.2%;margin-top: 1px">
                    <a href={!! url()->current()."/".$row->column('id') !!} >
                        <div class="mailbox-attachment-info rounded" >
                            <span class="mailbox-attachment-icon has-img" >
                                <h1 style="display: none">
                                    {!! $model = new \App\Models\Question !!}
                                </h1>
                                <img style="width:100%;height:100% ;object-fit:cover" class="spanStyle2" src={{$model->getImage().str_replace(' ','%20',explode(',',$row->column('imge')))[0]}}  alt="..." >
                            </span>
                            <div class="d-flex item">
                                <span class="mailbox-attachment-name">
                                    ID:{!! $grid->columns()->get('id') !!}
                                </span> 
                                {!! $row->column('id') !!}
                            </div>
                            <div>
                                <span class="spanStyle">
                                    {!! $row->column('title') !!}
                                </span>
                                <div class="divMargin">
                                    {!! $row->column(Dcat\Admin\Grid\Column::ACTION_COLUMN_NAME) !!}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    {!! $grid->renderFooter() !!}
    @include('admin::grid.table-pagination')
</div>


