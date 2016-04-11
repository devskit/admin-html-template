<?php require 'header.php'; ?>

    <style>
        #grid .column, #grid .columns {
            background: #EEE;
            text-align: center;
            border-radius: 4px;
            font-size: 10px;
            text-transform: uppercase;
            height: 30px;
            line-height: 30px;
            margin-bottom: .75rem;
            font-weight: 600;
            letter-spacing: .1rem;
        }
    </style>
    <!-- Grid -->
    <div id="grid">
        <h5>The grid</h5>
        <div class="example-grid docs-example">
            <div class="row">
                <div class="one column">One</div>
                <div class="eleven columns">Eleven</div>
            </div>
            <div class="row">
                <div class="two columns">Two</div>
                <div class="ten columns">Ten</div>
            </div>
            <div class="row">
                <div class="three columns">Three</div>
                <div class="nine columns">Nine</div>
            </div>
            <div class="row">
                <div class="four columns">Four</div>
                <div class="eight columns">Eight</div>
            </div>
            <div class="row">
                <div class="five columns">Five</div>
                <div class="seven columns">Seven</div>
            </div>
            <div class="row">
                <div class="six columns">Six</div>
                <div class="six columns">Six</div>
            </div>
            <div class="row">
                <div class="seven columns">Seven</div>
                <div class="five columns">Five</div>
            </div>
            <div class="row">
                <div class="eight columns">Eight</div>
                <div class="four  columns">Four</div>
            </div>
            <div class="row">
                <div class="nine columns">Nine</div>
                <div class="three columns">Three</div>
            </div>
            <div class="row">
                <div class="ten columns">Ten</div>
                <div class="two columns">Two</div>
            </div>
            <div class="row">
                <div class="eleven columns">Eleven</div>
                <div class="one column">One</div>
            </div>
        </div>


        <!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code>&lt;!-- .container is main centered wrapper --&gt;
&lt;div class=&quot;container&quot;&gt;

    &lt;!-- columns should be the immediate child of a .row --&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;one column&quot;&gt;One&lt;/div&gt;
        &lt;div class=&quot;eleven columns&quot;&gt;Eleven&lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- just use a number and class &#39;column&#39; or &#39;columns&#39; --&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;two columns&quot;&gt;Two&lt;/div&gt;
        &lt;div class=&quot;ten columns&quot;&gt;Ten&lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- there are a few shorthand columns widths as well --&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;one-third column&quot;&gt;1/3&lt;/div&gt;
        &lt;div class=&quot;two-thirds column&quot;&gt;2/3&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;one-half column&quot;&gt;1/2&lt;/div&gt;
        &lt;div class=&quot;one-half column&quot;&gt;1/2&lt;/div&gt;
    &lt;/div&gt;

&lt;/div&gt;
</code>
</pre>
        <!-- ————————————————————————————————————————————————————— -->
    </div>

    <!-- Buttons -->
    <div id="messages">
        <h5>Messages</h5>
        <div class="docs-example">
            <div>
                <div class="message success">The content was saved with success!</div>
                <div class="message error">An error occurred! Please try again later.</div>
            </div>
        </div>
<pre>
<code>&lt;div class=&quot;message success&quot;&gt;The content was saved with success!&lt;/div&gt;
&lt;div class=&quot;message error&quot;&gt;An error occurred! Please try again later.&lt;/div&gt;
</code>
</pre>
    </div>

    <br>
    <br>
    <br>

    <!-- Buttons -->
    <div id="buttons">
        <h5>Buttons</h5>
        <p>Buttons come in two basic flavors in Skeleton. The standard <code>&lt;button&gt;</code> element is plain, whereas the <code>.button-primary</code> button is vibrant and prominent. Button styles are applied to a number of appropriate form elements, but can also be arbitrarily attached to anchors with a <code>.button</code> class.</p>
        <div class="docs-example">
            <div>
                <a class="button" href="#">Anchor button</a>
                <button>Button element</button>
                <input type="submit" value="submit input">
                <input type="button" value="button input">
            </div>
            <div>
                <a class="button button-primary" href="#">Anchor button</a>
                <button class="button-primary">Button element</button>
                <input class="button-primary" type="submit" value="submit input">
                <input class="button-primary" type="button" value="button input">
            </div>
        </div>


        <!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code>&lt;!-- Standard buttons --&gt;
&lt;a class=&quot;button&quot; href=&quot;#&quot;&gt;Anchor button&lt;/a&gt;
&lt;button&gt;Button element&lt;/button&gt;
&lt;input type=&quot;submit&quot; value=&quot;submit input&quot;&gt;
&lt;input type=&quot;button&quot; value=&quot;button input&quot;&gt;

&lt;!-- Primary buttons --&gt;
&lt;a class=&quot;button button-primary&quot; href=&quot;#&quot;&gt;Anchor button&lt;/a&gt;
&lt;button class=&quot;button-primary&quot;&gt;Button element&lt;/button&gt;
&lt;input class=&quot;button-primary&quot; type=&quot;submit&quot; value=&quot;submit input&quot;&gt;
&lt;input class=&quot;button-primary&quot; type=&quot;button&quot; value=&quot;button input&quot;&gt;
</code>
</pre>
        <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Forms -->
    <div id="forms">
        <h5>Forms</h5>
        <p>Forms are a huge pain, but hopefully these styles make it a bit easier. All inputs, select, and buttons are normalized for a common height cross-browser so inputs can be stacked or placed alongside each other.</p>
        <div class="docs-example docs-example-forms">
            <form>
                <div class="row">
                    <div class="six columns">
                        <label for="exampleEmailInput">Your email</label>
                        <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                    </div>
                    <div class="six columns">
                        <label for="exampleRecipientInput">Reason for contacting</label>
                        <select class="u-full-width" id="exampleRecipientInput">
                            <option value="Option 1">Questions</option>
                            <option value="Option 2">Admiration</option>
                            <option value="Option 3">Can I get your number?</option>
                        </select>
                    </div>
                </div>
                <label for="exampleMessage">Message</label>
                <textarea class="u-full-width" placeholder="Hi Dave &hellip;" id="exampleMessage"></textarea>
                <label class="example-send-yourself-copy">
                    <input type="checkbox">
                    <span class="label-body">Send a copy to yourself</span>
                </label>
                <input class="button-primary" type="submit" value="Submit">
            </form>
        </div>


        <!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code>&lt;form&gt;
    &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;six columns&quot;&gt;
            &lt;label for=&quot;exampleEmailInput&quot;&gt;Your email&lt;/label&gt;
            &lt;input class=&quot;u-full-width&quot; type=&quot;email&quot; placeholder=&quot;test@mailbox.com&quot; id=&quot;exampleEmailInput&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;six columns&quot;&gt;
            &lt;label for=&quot;exampleRecipientInput&quot;&gt;Reason for contacting&lt;/label&gt;
            &lt;select class=&quot;u-full-width&quot; id=&quot;exampleRecipientInput&quot;&gt;
                &lt;option value=&quot;Option 1&quot;&gt;Questions&lt;/option&gt;
                &lt;option value=&quot;Option 2&quot;&gt;Admiration&lt;/option&gt;
                &lt;option value=&quot;Option 3&quot;&gt;Can I get your number?&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;label for=&quot;exampleMessage&quot;&gt;Message&lt;/label&gt;
    &lt;textarea class=&quot;u-full-width&quot; placeholder=&quot;Hi Dave …&quot; id=&quot;exampleMessage&quot;&gt;&lt;/textarea&gt;

    &lt;label class=&quot;example-send-yourself-copy&quot;&gt;
        &lt;input type=&quot;checkbox&quot;&gt;
        &lt;span class=&quot;label-body&quot;&gt;Send a copy to yourself&lt;/span&gt;
    &lt;/label&gt;

    &lt;input class=&quot;button-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
&lt;/form&gt;
</code>
</pre>
        <!-- ————————————————————————————————————————————————————— -->


    </div>

    <!-- Lists -->
    <div id="lists">
        <h5>Lists</h5>
        <div class="row docs-example">
            <div class="six columns">
                <ul>
                    <li>Unordered lists have basic styles</li>
                    <li>
                        They use the circle list style
                        <ul>
                            <li>Nested lists styled to feel right</li>
                            <li>Can nest either type of list into the other</li>
                        </ul>
                    </li>
                    <li>Just more list items mama san</li>
                </ul>
            </div>
            <div class="six columns">
                <ol>
                    <li>Ordered lists also have basic styles</li>
                    <li>
                        They use the decimal list style
                        <ul>
                            <li>Ordered and unordered can be nested</li>
                            <li>Can nest either type of list into the other</li>
                        </ul>
                    </li>
                    <li>Last list item just for the fun</li>
                </ol>
            </div>
        </div>


        <!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code>&lt;ul&gt;
    &lt;li&gt;Item 1&lt;/li&gt;
    &lt;li&gt;
    Item 2
        &lt;ul&gt;
            &lt;li&gt;Item 2.1&lt;/li&gt;
            &lt;li&gt;Item 2.2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;
</code>
</pre>
        <!-- ————————————————————————————————————————————————————— -->


    <!-- Tables -->
    <div id="tables">
        <h5>Tables</h5>
        <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> when building a <code>table</code>.</p>
        <div class="docs-example">
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Location</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Dave Gamache</td>
                    <td>26</td>
                    <td>Male</td>
                    <td>San Francisco</td>
                </tr>
                <tr>
                    <td>Dwayne Johnson</td>
                    <td>42</td>
                    <td>Male</td>
                    <td>Hayward</td>
                </tr>
                </tbody>
            </table>
        </div>


        <!-- CODE EXAMPLE ———————————————————————————————————————— -->
<pre class="code-example">
<code>&lt;table class=&quot;u-full-width&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Age&lt;/th&gt;
            &lt;th&gt;Sex&lt;/th&gt;
            &lt;th&gt;Location&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Dave Gamache&lt;/td&gt;
            &lt;td&gt;26&lt;/td&gt;
            &lt;td&gt;Male&lt;/td&gt;
            &lt;td&gt;San Francisco&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Dwayne Johnson&lt;/td&gt;
            &lt;td&gt;42&lt;/td&gt;
            &lt;td&gt;Male&lt;/td&gt;
            &lt;td&gt;Hayward&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
</code>
</pre>
        <!-- ————————————————————————————————————————————————————— -->


    </div>
<?php require 'footer.php'; ?>