class Queue {
    private $queue;

    public function __construct() {
        $this->queue = [];
    }

    // Enqueue: Add an element to the rear of the queue
    public function enqueue($element) {
        array_push($this->queue, $element);
    }

    // Dequeue: Remove and return the element from the front of the queue
    public function dequeue() {
        if ($this->isEmpty()) {
            return "Queue is empty";
        }
        return array_shift($this->queue);
    }

    // Peek: Return the element at the front of the queue without removing it
    public function peek() {
        if ($this->isEmpty()) {
            return "Queue is empty";
        }
        return $this->queue[0];
    }

    // isEmpty: Check if the queue is empty
    public function isEmpty() {
        return empty($this->queue);
    }

    // Size: Return the number of elements in the queue
    public function size() {
        return count($this->queue);
    }
}

// Example usage:
$queue = new Queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

echo "Front element: " . $queue->peek() . "\n"; // Output: Front element: 1
echo "Dequeued element: " . $queue->dequeue() . "\n"; // Output: Dequeued element: 1

echo "Queue size: " . $queue->size() . "\n"; // Output: Queue size: 2
