<?php

namespace Sabre\DAV;

/**
 * File class
 *
 * This is a helper class, that should aid in getting file classes setup.
 * Most of its methods are implemented, and throw permission denied exceptions
 *
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
abstract class File extends Node implements IFile {

    /**
     * Updates the data
     *
     * data is a readable stream resource.
     *
     * @param string|resource $data
     * @return void
     */
    function put($data) {

        throw new Exception\Forbidden('Permission denied to change data');

    }

    /**
     * Returns the data
     *
     * This method may either return a string or a readable stream resource
     *
     * @return mixed
     */
    function get() {

        throw new Exception\Forbidden('Permission denied to read this file');

    }

    /**
     * Returns the size of the file, in bytes.
     *
     * @return int
     */
    function getSize() {

        return 0;

    }

    /**
     * Returns the ETag for a file
     *
     * An ETag is a unique identifier representing the current version of the file. If the file changes, the ETag MUST change.
     * The ETag is an arbitrary string, but MUST be surrounded by double-quotes.
     *
     * Return null if the ETag can not effectively be determined
     *
     * @return string|null
     */
    function getETag() {

        return null;

    }

    /**
     * Returns the mime-type for a file
     *
     * If null is returned, we'll assume application/octet-stream
     *
     * @return string|null
     */
    function getContentType() {

        return null;

    }

}
