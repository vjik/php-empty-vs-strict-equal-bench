# PHP `empty()` VS `===` Bench

Benchmark running:

```shell
vendor/bin/phpbench run --report=aggregate
```

## Results

With PHP version 8.0.28, xdebug ❌, opcache ❌:

```
+----------------------+------------------+-----+---------+-----+-----------+---------+--------+
| benchmark            | subject          | set | revs    | its | mem_peak  | mode    | rstdev |
+----------------------+------------------+-----+---------+-----+-----------+---------+--------+
| StringEmptyBench     | benchEmpty       |     | 1000000 | 20  | 694.456kb | 0.036μs | ±0.84% |
| StringEmptyBench     | benchStrictEqual |     | 1000000 | 20  | 694.472kb | 0.036μs | ±1.78% |
| ArrayNonEmptyBench   | benchEmpty       |     | 1000000 | 20  | 694.472kb | 0.036μs | ±2.49% |
| ArrayNonEmptyBench   | benchStrictEqual |     | 1000000 | 20  | 694.488kb | 0.050μs | ±1.56% |
| ObjectNullBench      | benchEmpty       |     | 1000000 | 20  | 694.456kb | 0.035μs | ±1.52% |
| ObjectNullBench      | benchStrictEqual |     | 1000000 | 20  | 694.472kb | 0.034μs | ±3.16% |
| IntegerNullBench     | benchEmpty       |     | 1000000 | 20  | 694.456kb | 0.035μs | ±2.08% |
| IntegerNullBench     | benchStrictEqual |     | 1000000 | 20  | 694.472kb | 0.034μs | ±1.14% |
| StringNonEmptyBench  | benchEmpty       |     | 1000000 | 20  | 694.472kb | 0.036μs | ±1.39% |
| StringNonEmptyBench  | benchStrictEqual |     | 1000000 | 20  | 694.488kb | 0.037μs | ±1.32% |
| ObjectNonEmptyBench  | benchEmpty       |     | 1000000 | 20  | 694.472kb | 0.036μs | ±2.54% |
| ObjectNonEmptyBench  | benchStrictEqual |     | 1000000 | 20  | 694.488kb | 0.043μs | ±0.84% |
| ArrayEmptyBench      | benchEmpty       |     | 1000000 | 20  | 694.456kb | 0.036μs | ±1.89% |
| ArrayEmptyBench      | benchStrictEqual |     | 1000000 | 20  | 694.472kb | 0.036μs | ±1.00% |
| IntegerNonEmptyBench | benchEmpty       |     | 1000000 | 20  | 694.488kb | 0.036μs | ±2.73% |
| IntegerNonEmptyBench | benchStrictEqual |     | 1000000 | 20  | 694.504kb | 0.033μs | ±2.45% |
+----------------------+------------------+-----+---------+-----+-----------+---------+--------+
```

With PHP version 8.1.18, xdebug ❌, opcache ❌:

```
+----------------------+------------------+-----+---------+-----+-----------+---------+---------+
| benchmark            | subject          | set | revs    | its | mem_peak  | mode    | rstdev  |
+----------------------+------------------+-----+---------+-----+-----------+---------+---------+
| StringEmptyBench     | benchEmpty       |     | 1000000 | 20  | 676.248kb | 0.036μs | ±1.58%  |
| StringEmptyBench     | benchStrictEqual |     | 1000000 | 20  | 676.264kb | 0.036μs | ±1.64%  |
| ArrayNonEmptyBench   | benchEmpty       |     | 1000000 | 20  | 676.264kb | 0.036μs | ±1.42%  |
| ArrayNonEmptyBench   | benchStrictEqual |     | 1000000 | 20  | 676.280kb | 0.050μs | ±1.44%  |
| ObjectNullBench      | benchEmpty       |     | 1000000 | 20  | 676.248kb | 0.035μs | ±4.13%  |
| ObjectNullBench      | benchStrictEqual |     | 1000000 | 20  | 676.264kb | 0.034μs | ±1.42%  |
| IntegerNullBench     | benchEmpty       |     | 1000000 | 20  | 676.248kb | 0.035μs | ±1.34%  |
| IntegerNullBench     | benchStrictEqual |     | 1000000 | 20  | 676.264kb | 0.034μs | ±2.21%  |
| StringNonEmptyBench  | benchEmpty       |     | 1000000 | 20  | 676.264kb | 0.036μs | ±1.73%  |
| StringNonEmptyBench  | benchStrictEqual |     | 1000000 | 20  | 676.792kb | 0.037μs | ±1.89%  |
| ObjectNonEmptyBench  | benchEmpty       |     | 1000000 | 20  | 676.264kb | 0.035μs | ±1.27%  |
| ObjectNonEmptyBench  | benchStrictEqual |     | 1000000 | 20  | 676.792kb | 0.044μs | ±2.50%  |
| ArrayEmptyBench      | benchEmpty       |     | 1000000 | 20  | 676.248kb | 0.036μs | ±1.23%  |
| ArrayEmptyBench      | benchStrictEqual |     | 1000000 | 20  | 676.264kb | 0.036μs | ±3.04%  |
| IntegerNonEmptyBench | benchEmpty       |     | 1000000 | 20  | 676.280kb | 0.036μs | ±1.06%  |
| IntegerNonEmptyBench | benchStrictEqual |     | 1000000 | 20  | 676.808kb | 0.034μs | ±12.83% |
+----------------------+------------------+-----+---------+-----+-----------+---------+---------+
```

With PHP version 8.2.5, xdebug ❌, opcache ❌:

```
+----------------------+------------------+-----+---------+-----+-----------+---------+--------+
| benchmark            | subject          | set | revs    | its | mem_peak  | mode    | rstdev |
+----------------------+------------------+-----+---------+-----+-----------+---------+--------+
| StringEmptyBench     | benchEmpty       |     | 1000000 | 20  | 671.944kb | 0.036μs | ±2.08% |
| StringEmptyBench     | benchStrictEqual |     | 1000000 | 20  | 671.960kb | 0.036μs | ±1.67% |
| ArrayNonEmptyBench   | benchEmpty       |     | 1000000 | 20  | 671.960kb | 0.036μs | ±1.88% |
| ArrayNonEmptyBench   | benchStrictEqual |     | 1000000 | 20  | 671.976kb | 0.050μs | ±2.08% |
| ObjectNullBench      | benchEmpty       |     | 1000000 | 20  | 671.944kb | 0.034μs | ±1.86% |
| ObjectNullBench      | benchStrictEqual |     | 1000000 | 20  | 671.960kb | 0.034μs | ±1.02% |
| IntegerNullBench     | benchEmpty       |     | 1000000 | 20  | 671.944kb | 0.034μs | ±7.57% |
| IntegerNullBench     | benchStrictEqual |     | 1000000 | 20  | 671.960kb | 0.034μs | ±1.56% |
| StringNonEmptyBench  | benchEmpty       |     | 1000000 | 20  | 671.960kb | 0.036μs | ±1.06% |
| StringNonEmptyBench  | benchStrictEqual |     | 1000000 | 20  | 672.488kb | 0.037μs | ±1.05% |
| ObjectNonEmptyBench  | benchEmpty       |     | 1000000 | 20  | 671.960kb | 0.036μs | ±1.61% |
| ObjectNonEmptyBench  | benchStrictEqual |     | 1000000 | 20  | 672.488kb | 0.043μs | ±1.23% |
| ArrayEmptyBench      | benchEmpty       |     | 1000000 | 20  | 671.944kb | 0.036μs | ±3.02% |
| ArrayEmptyBench      | benchStrictEqual |     | 1000000 | 20  | 671.960kb | 0.036μs | ±1.13% |
| IntegerNonEmptyBench | benchEmpty       |     | 1000000 | 20  | 671.976kb | 0.036μs | ±2.13% |
| IntegerNonEmptyBench | benchStrictEqual |     | 1000000 | 20  | 672.504kb | 0.034μs | ±7.52% |
+----------------------+------------------+-----+---------+-----+-----------+---------+--------+
```

## License

The package is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.
