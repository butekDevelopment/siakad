<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('koordinator/sidebar'); ?>
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?>
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Welcome To The Dashboard</h4>
                                <br><br><br><br>
                                <p class="category">In Here You Can Do EveryThing What You Want</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <?php $this->load->view('/koordinator/footer');

