<script src="../js/pagination.js"></script>
<?php include 'includes/header.php'; ?>
<style><?php include 'css/pagination.css'; ?></style>
<main>

    <h1>Pagination with Vanilla JavaScript</h1>
    <ul id="paginated-list" data-current-page="1" aria-live="polite">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
        <li>Item 5</li>
        <li>Item 6</li>
        <li>Item 7</li>
        <li>Item 8</li>
        <li>Item 9</li>
        <li>Item 10</li>
        <li>Item 11</li>
        <li>Item 12</li>
        <li>Item 13</li>
        <li>Item 14</li>
        <li>Item 15</li>
        <li>Item 16</li>
        <li>Item 17</li>
        <li>Item 18</li>
        <li>Item 19</li>
        <li>Item 20</li>
        <li>Item 21</li>
        <li>Item 22</li>
        <li>Item 23</li>
        <li>Item 24</li>
        <li>Item 25</li>
        <li>Item 26</li>
        <li>Item 27</li>
        <li>Item 28</li>
        <li>Item 29</li>
        <li>Item 30</li>
        <li>Item 31</li>
        <li>Item 32</li>
        <li>Item 33</li>
        <li>Item 34</li>
        <li>Item 35</li>
        <li>Item 36</li>
        <li>Item 37</li>
        <li>Item 38</li>
        <li>Item 39</li>
        <li>Item 40</li>
        <li>Item 41</li>
        <li>Item 42</li>
        <li>Item 43</li>
        <li>Item 44</li>
        <li>Item 45</li>
        <li>Item 46</li>
        <li>Item 47</li>
        <li>Item 48</li>
        <li>Item 49</li>
        <li>Item 50</li>
    </ul>

    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
            &lt;
        </button>

        <div id="pagination-numbers">

        </div>

        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
            &gt;
        </button>
    </nav>
</main>

<?php include 'includes/footer.php'; ?>
