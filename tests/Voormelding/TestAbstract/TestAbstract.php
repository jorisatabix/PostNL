<?php
/*
 * The MIT License
 *
 * Copyright 2014 Soneritics Webdevelopment.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
$root = __DIR__ . '/../../../Soneritics/PostNL';
require_once "{$root}/Mapping/MappingTrait.php";
require_once "{$root}/Mapping/MappingGenerator.php";
require_once "{$root}/Data/Afzender.php";
require_once "{$root}/Data/Pakket.php";
require_once "{$root}/Data/Productcode.php";
require_once "{$root}/Data/Rembours.php";
require_once "{$root}/Voormelding.php";

require_once __DIR__ . "/../Data/TestData.php";

use PHPUnit\Framework\TestCase;


/**
 * Abstracte class voor unit tests.
 *
 * @author Jordi Jolink
 * @since 21-4-2015
 */
class TestAbstract extends TestCase
{

} 