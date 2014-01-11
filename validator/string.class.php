<?php
namespace ay\vlad\validator;

/**
 * @link https://github.com/gajus/vlad for the canonical source repository
 * @copyright Copyright (c) 2013-2014, Anuary (http://anuary.com/)
 * @license https://github.com/gajus/vlad/blob/master/LICENSE BSD 3-Clause
 */
class String extends \ay\vlad\Validator {
	protected
		$messages = [
			'not_string' => [
				'{vlad.subject.name} is not a string.',
				'The input is not a string.'
			]
		];
	
	public function validate (\ay\vlad\Subject $subject) {
		if (!$subject->isFound()) {
			throw new \Exception('Validator cannot be used with undefined input.');
		}

		if (!is_string($subject->getValue())) {
			return 'not_string';
		}
	}
}