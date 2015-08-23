<?php

/**
 * Strategy Interface
 */

interface SearchInterface
{
    public function __construct($keyword);

    public function getBookData();

    public function search($keyword);

}

/**
 * Strategy
 */    
class Search implements SearchInterface
{
    private $filename;

    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }

    private function _getDataSource()
    {
        //データ・アクセスクラスがあってもいいかも
        $source = 'book_data.csv';
        if (file_exists($source)) {
            $books = file($source, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($books as $k => $book) {
                $return[] = explode(',', $book);
            }
            return $return; 
        } else {
            throw new RuntimeException('No data source exists');
        }
    }

    public function getBookData()
    {
        //データのソース存在確認を入れる
        $this->books = $this->_getDataSource();
        return $this->search($this->keyword);
    }

    public function search($keyword){}
}

/**
 * Concrete Strategy
 */
class SearchTitle extends Search
{
    public function search($keyword)
    {
        foreach ($this->books as $k => $v) {
            if (stripos($v[0], $keyword) !== false) {
                $result[] = $v[0];
            }
        }
        return $result;
    }
}

/**
 * Concrete Strategy
 */
class SearthAuthor extends Search
{
    public function search($keyword)
    {
        /*作者をけんさくする*/
        return 'Famous Person';
    }
}

class SearchContext
{
    private $strategy;

    public function __construct(SearchInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function getBook()
    {
        return $this->strategy->getBookData();
    }
}

/**
 * 本のタイトル検索
 */
$titleStrategy = new SearchTitle($argv[1]);
$titleContext  = new SearchContext($titleStrategy);

$result = $titleContext->getBook();

var_dump($result);

