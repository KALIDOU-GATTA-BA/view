<?php
function secureForm($data)
        {
            $sata=trim($data);
            $data=stripslashes($data);
            $data=strip_tags($data);
            return $data;
        }