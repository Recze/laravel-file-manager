<?php

namespace Recze\LaravelFileManager\Events;

use Illuminate\Http\Request;

class UnzipFailed
{
    /**
     * @var string
     */
    private $disk;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $folder;

    /**
     * UnzipFailed constructor.
     *
     * @param  Request  $request
     */
    public function __construct(Request $request)
    {
        $this->disk = $request->input('disk');
        $this->path = $request->input('path');
        $this->folder = $request->input('folder');
    }

    /**
     * @return string
     */
    public function disk()
    {
        return $this->disk;
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function folder()
    {
        return $this->folder;
    }
}
