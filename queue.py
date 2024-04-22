# Actually, deque (pronounced "deck") stands for double-ended queue,
# which is a data structure that allows insertion and deletion of elements from both the front and the rear of the queue.
# It's different from the FIFO (First-In-First-Out) queue,
# where elements are removed in the order they were added. 
# deque provides efficient O(1) time complexity for insertion and deletion operations at both ends of the queue.


# __init__: Initializes an empty queue.
# self.values = []: Checks if the queue is empty.
# enqueue: Adds an item to the end of the queue.
# dequeue: Removes and returns the item at the front of the queue.
# peek: Returns the item at the front of the queue without removing it.
# size: Returns the number of items in the queue.


class queue:
def __init__(self):
self.values = []
def enqueue(self, x):
self.values.append(x)
def dequeue(self):
front = self.values[0]
self.values= self.values[1:]
return front
q1 = queue(10)
q1.enqueue(20)
q1.enqueue(30)
print(q1.values)
q1.enqueue(40)
print(q1.values) 

output = [10, 20,30]
[10,20,30,40]
