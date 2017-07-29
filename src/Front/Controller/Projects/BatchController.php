<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Controller\Projects;

use Phoenix\Controller\Batch\BatchDelegatingController;

/**
 * The UpdateController class.
 *
 * @since  1.0
 */
class BatchController extends BatchDelegatingController
{
	/**
	 * The default model.
	 *
	 * Keep model name here to make sure controller get singular model to handle update.
	 *
	 * @var  string
	 */
	protected $model = 'Project';
}