<?php

namespace miaababikir\Snow\Tests\Feature;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use miaababikir\Snow\JsonParser;
use Orchestra\Testbench\TestCase;

class JsonParserTest extends TestCase
{

    /**
     * @test
     */
    public function can_parse_header()
    {
        $content = $this->getJsonContent('headers.json');

        $parser = new JsonParser($content);

        $parser->getHTML();

        $this->assertTrue(Str::contains($parser->getHTML(), '<h2>This is h2</h2><h3>This is h3</h3><h4>This is h4</h4>'));

    }

    /**
     * @test
     */
    public function can_parse_paragraph()
    {
        $content = $this->getJsonContent('paragraph.json');

        $parser = new JsonParser($content);

        $parser->getHTML();

        $this->assertTrue(Str::contains($parser->getHTML(), '<p>Hey. Meet the new Editor. On this page you can see it in action — try to edit this text.</p>'));
    }

    /**
     * @test
     */
    public function can_parse_lists()
    {
        $content = $this->getJsonContent('list.json');

        $parser = new JsonParser($content);

        
        $this->assertTrue(Str::contains($parser->getHTML(), '<ul><li>It is a block-styled editor</li><li>It returns clean data output in JSON</li><li>Designed to be extendable and pluggable with a simple API</li></ul>'));
    }


    public function getJsonContent($filename)
    {
        return json_decode(File::get(__DIR__ . '/../Json/' . $filename));
    }

}