class Queue {
  
    constructor() {
        this.items = [];
    }

    // Enqueue: Add an element to the rear of the queue
    enqueue(element) {
        this.items.push(element);
    }

    // Dequeue: Remove and return the element from the front of the queue
    dequeue() {
        if (this.isEmpty()) {
            return "Queue is empty";
        }
        return this.items.shift();
    }

    // Peek: Return the element at the front of the queue without removing it
    peek() {
        if (this.isEmpty()) {
            return "Queue is empty";
        }
        return this.items[0];
    }

    // isEmpty: Check if the queue is empty
    isEmpty() {
        return this.items.length === 0;
    }

    // size: Return the number of elements in the queue
    size() {
        return this.items.length;
    }
}

// Example usage:
let queue = new Queue();

queue.enqueue(1);
 // create a object // push element one by one  
queue.enqueue(2);
queue.enqueue(3);

console.log("Front element:", queue.peek()); // Output: Front element: 1
console.log("Dequeued element:", queue.dequeue()); // Output: Dequeued element: 1

console.log("Queue size:", queue.size()); // Output: Queue size: 2
