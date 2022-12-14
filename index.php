<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * CONTENT PROCESSOR
 *
 * @package    block_cp
 * @copyright  2022 QuizCo GmbH (http://quizco.de)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once('../../config.php');

$PAGE->set_url(new moodle_url('/blocks/cp/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('CONTENT PROCESSOR');

echo $OUTPUT->header();

echo '<a href="/moodle40/">'. 'back' .'</a>' . '</br>';
echo ' <iframe id="inlineFrameExample"
            title="inlineFrameExample"
            width="750"
            height="800"
            loading="eager"
            style="border: none"
            no-referrer
            src="https://dev.premium.content-processor.com/" allow>
           </iframe>';
echo $OUTPUT->footer();